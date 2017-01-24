<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'models/BaseModels/SuscriptoresBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla suscriptores
 * -Versión: 10
 * -Fecha de creación: 2017-01-20 23:23:30
 * -Última modificación: 
 * -Comentario 
 * -Numero de columnas: 9
 * 
 * @author Javier
 */
class Suscriptores extends SuscriptoresBase {

    const TIER_BASE = 600;
    const DIVISION_BASE = 100;

    static $MMR_CALC_CONFIG = [
        'tier' => [
            'BRONZE' => 1,
            'SILVER' => 2,
            'GOLD' => 3,
            'PLATINUM' => 4,
            'DIAMOND' => 5,
            'MASTER' => 6,
            'CHALLENGER' => 7,
        ],
        'division' => [
            'V' => 0,
            'IV' => 1,
            'III' => 2,
            'II' => 3,
            'I' => 4,
        ]
    ];
    static $A_TIERS = ['PROVISIONAL', 'BRONZE', 'SILVER', 'GOLD', 'PLATINUM', 'DIAMOND', 'MASTER', 'CHALLENGER'];
    static $A_DIVISION = ['V', 'IV', 'III', 'II', 'I'];

    /**
     * Constructor
     * @param $idsuscriptores int(11) 
     * @param $summoner_id int(11) id del invocador
     * @param $region varchar(45) region, euw, lan, las
     * @param $summoner_name varchar(45) nombre del invocador
     * @param $registration_date int(11) unix_timestamp
     * @param $last_update int(11) unix_timestamp
     * @param $tier varchar(45) tier: oro, bronce, challenger, etc
     * @param $division varchar(45) division I, II, III, IV, V
     * @param $lp int(11) league points
     * 
     */
    function __construct($idsuscriptores = null, $summoner_id = null, $region = null, $summoner_name = null, $registration_date = null, $last_update = null, $tier = null, $division = null, $lp = null) {
        parent::__construct($idsuscriptores, $summoner_id, $region, $summoner_name, $registration_date, $last_update, $tier, $division, $lp);
    }

    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES

    /**
     * Añade el usuario al youtuber, y actualiza sus datos en la base de datos
     * @param string $youtuber_id
     * @param int $summoner_id
     * @param string $region
     * @param string $name
     */
    public function newSub($youtuber_id, $summoner_id, $region, $name) {
        //buscamos el suscriptor con los datos con los que lo acabamos de insertar
        $this->findOneBy([
            self::COLUMN_SUMMONER_NAME => $name,
            self::COLUMN_SUMMONER_ID => $summoner_id,
            self::COLUMN_REGION => $region,
        ]);
        if (!$this->getIdsuscriptores()) {
            $this->insert([
                self::COLUMN_SUMMONER_NAME => $name,
                self::COLUMN_SUMMONER_ID => $summoner_id,
                self::COLUMN_REGISTRATION_DATE => time(),
                self::COLUMN_REGION => $region,
            ]);
            $this->setIdsuscriptores($this->db->insert_id());
        }

        $ci = & get_instance();
        //asociamos el suscriptor. pega un throw si ya existia
        $ci->SuscriptoresYoutubers->insertUnique([
            SuscriptoresYoutubers::COLUMN_IDSUSCRIPTOR => $this->getIdsuscriptores(),
            SuscriptoresYoutubers::COLUMN_IDYOUTUBER => $youtuber_id,
        ]);

        return $this;
    }

    /**
     * Actualiza:
     * - tier, division, lp
     * - recent games
     * - ranked games
     * - summary stats
     * Puede lanzar excepciones, hay que tener cuidado.
     * @throw \Exception
     */
    public function updateSubData() {
        $this->updateLeagueData();
        $this->updateLastestGamesData();
        $this->updateRankedGamesData();
        $this->updateSummaryStatsData();
    }

    /**
     * Actualiza tier, division y puntos de liga
     * @return Suscriptores
     * @throw \Exception
     */
    public function updateLeagueData() {
        \LolApi\LolApi::globalApi()->LolApiConfig->region = $this->getRegion();
        try {
            $leagueDtoList = \LolApi\LolApi::globalApi()->getLeagueDtoListEnry([$this->getSummoner_id()])[$this->getSummoner_id()];
            if (is_array($leagueDtoList)) {
                $leagueDtoList = array_values($leagueDtoList)[0];
            }
            if (count($leagueDtoList->entries) > 0) {
                $this->setTier($leagueDtoList->tier);
                $this->setDivision($leagueDtoList->entries[0]->division);
                $this->setLp($leagueDtoList->entries[0]->leaguePoints);
                $this->setMmr(self::calcMMRByLeague($this->getTier(),$this->getDivision(),$this->getLp()));
                $this->update([
                    self::COLUMN_TIER => $leagueDtoList->tier,
                    self::COLUMN_DIVISION => $leagueDtoList->entries[0]->division,
                    self::COLUMN_LP => $leagueDtoList->entries[0]->leaguePoints,
                    self::COLUMN_MMR => $this->getMmr()
                ]);
            }
        } catch (\LolApi\Exceptions\NotFoundException $ex) {
            $this->setTier('PROVISIONAL');
            $this->setDivision(null);
            $this->setLp(null);
            $this->setMmr(1200);
            $this->update([
                self::COLUMN_TIER => 'PROVISIONAL',
                self::COLUMN_DIVISION => null,
                self::COLUMN_LP => null,
                self::COLUMN_MMR => 1200
            ]);
        } catch (\Exception $e) {
            throw $ex;
        }

        return $this;
    }

    /**
     * actualiza los ultimos juegos jugados (maximo recupera 10 juegos)
     * @return int total inserts
     * @throw \Exception
     */
    public function updateLastestGamesData() {
        \LolApi\LolApi::globalApi()->LolApiConfig->region = $this->getRegion();
        $recentsgames = \LolApi\LolApi::globalApi()->getRecentGamesDto($this->getSummoner_id());
        $aGamesIds = $this->getGamesIdsRegisted();
        $ci = & get_instance();
        $inserts = 0;
        foreach ($recentsgames->games as $gamedto) {
            if (array_search($gamedto->gameId, $aGamesIds) === false) {
                $ci->LastestGames->insert([
                    LastestGames::COLUMN_GAMEID => $gamedto->gameId,
                    LastestGames::COLUMN_CHAMPION => $gamedto->championId,
                    LastestGames::COLUMN_GAMEMODE => $gamedto->gameMode,
                    LastestGames::COLUMN_GAMETYPE => $gamedto->gameType,
                    LastestGames::COLUMN_SUBTYPE => $gamedto->subType,
                    LastestGames::COLUMN_SEASON => \LolApi\LolApi::globalApi()->LolApiConfig->current_season,
                    LastestGames::COLUMN_CREATEDATE => $gamedto->createDate,
                    LastestGames::COLUMN_KILLS => $gamedto->stats->championsKilled,
                    LastestGames::COLUMN_DEATHS => $gamedto->stats->numDeaths,
                    LastestGames::COLUMN_ASSISTS => $gamedto->stats->assists,
                    LastestGames::COLUMN_KDA => $gamedto->stats->numDeaths > 0 ? ($gamedto->stats->championsKilled + $gamedto->stats->assists) / $gamedto->stats->numDeaths : null,
                ]);
                $ci->SuscriptoresLastestGames->insert([
                    SuscriptoresLastestGames::COLUMN_IDSUSCRIPTOR => $this->getIdsuscriptores(),
                    SuscriptoresLastestGames::COLUMN_IDLASTEST_GAME => $this->db->insert_id()
                ]);
                $inserts++;
            }
        }
        return $inserts;
    }

    /**
     * actualiza los ranked games jugados, recupera TODOS los ranked games, es una 
     * consulta bastante larga, habría que tener cuidado o medirlo de alguna manera
     * más eficaz para que no recupere todos
     * @return int total inserts
     * @throw \Exception
     */
    public function updateRankedGamesData() {
        \LolApi\LolApi::globalApi()->LolApiConfig->region = $this->getRegion();
        $rankedgames = \LolApi\LolApi::globalApi()->getMatchList($this->getSummoner_id());
        $aGamesIds = $this->getGamesIdsRegisted();
        $inserts = 0;
        $ci = & get_instance();
        foreach ($rankedgames->matches as $match) {
            if (array_search($match->matchId, $aGamesIds) === false) {
                $ci->RankedGames->insert([
                    RankedGames::COLUMN_MATCHID => $match->matchId,
                    RankedGames::COLUMN_CHAMPION => $match->champion,
                    RankedGames::COLUMN_QUEUE => $match->queue,
                    RankedGames::COLUMN_SEASON => $match->season,
                    RankedGames::COLUMN_TIMESTAMP => $match->timestamp,
                    RankedGames::COLUMN_LANE => $match->lane,
                    RankedGames::COLUMN_ROLE => $match->role,
                    RankedGames::COLUMN_KILLS => null,
                    RankedGames::COLUMN_DEATHS => null,
                    RankedGames::COLUMN_ASSISTS => null,
                    RankedGames::COLUMN_KDA => null,
                ]);
                $ci->SuscriptoresRankedGames->insert([
                    SuscriptoresRankedGames::COLUMN_IDSUSCRIPTOR => $this->getIdsuscriptores(),
                    SuscriptoresRankedGames::COLUMN_IDRANKED_GAME => $this->db->insert_id()
                ]);
                $inserts++;
            }
        }
        return $inserts;
    }

    /**
     * actualiza los summary stats
     * @return array ['updates','inserts'] numero de sumaries insertados y actualizados
     * @throw \Exception
     */
    public function updateSummaryStatsData() {
        \LolApi\LolApi::globalApi()->LolApiConfig->region = $this->getRegion();
        $summaryStats = \LolApi\LolApi::globalApi()->getPlayerStatsSummaryListDto($this->getSummoner_id());
        $ci = & get_instance();
        $updates = 0;
        $inserts = 0;
        foreach ($summaryStats->playerStatSummaries as $summaries) {
            $ci->SummaryStats->findOneBy([
                SummaryStats::COLUMN_IDSUSCRIPTOR => $this->getIdsuscriptores(),
                SummaryStats::COLUMN_PLAYERSTATSUMMARYTYPE => $summaries->playerStatSummaryType,
            ]);
            if ($ci->SummaryStats->getIdsummary_stats() != null) {
                $ci->SummaryStats->update([
                    SummaryStats::COLUMN_LOSSES => $summaries->losses,
                    SummaryStats::COLUMN_WINS => $summaries->wins,
                    SummaryStats::COLUMN_MODIFYDATE => $summaries->modifyDate,
                ]);
                $updates++;
            } else {
                $ci->SummaryStats->insert([
                    SummaryStats::COLUMN_LOSSES => $summaries->losses,
                    SummaryStats::COLUMN_WINS => $summaries->wins,
                    SummaryStats::COLUMN_MODIFYDATE => $summaries->modifyDate,
                    SummaryStats::COLUMN_IDSUSCRIPTOR => $this->getIdsuscriptores(),
                    SummaryStats::COLUMN_PLAYERSTATSUMMARYTYPE => $summaries->playerStatSummaryType,
                ]);
                $inserts++;
            }
        }
        return ['updates' => $updates, 'inserts' => $inserts];
    }

    public function getYoutubers() {
        $ci = & get_instance();
        $aSuscriptoresYoutubers = $ci->SuscriptoresYoutubers->findBy([
            SuscriptoresYoutubers::COLUMN_IDSUSCRIPTOR => $this->getIdsuscriptores()
        ]);
        $aResult = [];
        foreach ($aSuscriptoresYoutubers as $oSuscriptoresYoutubers) {
            $youtuber = new Youtubers();
            $aResult[] = $youtuber->findOneById($oSuscriptoresYoutubers->getIdyoutuber());
        }
        return $aResult;
    }

    private $aGamesIdsRegisted;

    /**
     * Devuelve en formato de array todos los ids de los juegos registrados
     * @return array
     */
    private function getGamesIdsRegisted() {
        if (!$this->aGamesIdsRegisted) {
            $rs = $this->db->query(
                    'select game_id from
                        (select lg.gameId as game_id
                        from suscriptores_lastest_games slg
                        inner join lastest_games lg on lg.idlastest_games=slg.idlastest_game 
                        where slg.idsuscriptor='.$this->getIdsuscriptores().'
                        union
                        select rg.matchId as game_id
                        from suscriptores_ranked_games srg
                        inner join ranked_games rg on rg.idranked_games = srg.idranked_game
                        where srg.idsuscriptor='.$this->getIdsuscriptores().') as tmp
                    group by game_id')
                    ->result_array();
            $aGamesIds = [];
            foreach ($rs as $row) {
                $aGamesIds[] = $row['game_id'];
            }
            $this->aGamesIdsRegisted = $aGamesIds;
        }
        return $this->aGamesIdsRegisted;
    }

    public static function calcMMRByLeague($tier, $division, $lp) {
        $mmr = 0;
        if (self::$MMR_CALC_CONFIG['tier'][$tier] >= 6) {
            if ($lp > 200) {
                $tier = 'MASTER';
            }
            $mmr += self::$MMR_CALC_CONFIG['tier'][$tier] * self::TIER_BASE + $lp;
        } else {
            $mmr += self::$MMR_CALC_CONFIG['tier'][$tier] * self::TIER_BASE + self::$MMR_CALC_CONFIG['division'][$division] * self::DIVISION_BASE + $lp;
        }
        return $mmr;
    }

    public static function calcLeagueByMMR($mmr) {

        $tierIndex = floor($mmr / self::TIER_BASE);
        if ($tierIndex >= count(self::$A_TIERS)) {
            $tierIndex = count(self::$A_TIERS) - 1;
        }
        if ($tierIndex >= 6) {
            $tierIndex = 6;
            $divisionIndex = 4;
            $lp = floor($mmr - ($tierIndex * self::TIER_BASE));
        } else {
            $divisionIndex = floor(($mmr - ($tierIndex * self::TIER_BASE)) / self::DIVISION_BASE);
            if ($divisionIndex >= count(self::$A_DIVISION)) {
                $divisionIndex = count(self::$A_DIVISION) - 1;
            }
            $lp = floor($mmr - ($tierIndex * self::TIER_BASE) - ($divisionIndex * self::DIVISION_BASE));
        }

        return [self::$A_TIERS[$tierIndex], self::$A_DIVISION[$divisionIndex], $lp];
    }

    public function getSusbsToUpdate($bool_getAll = false) {
        if ($bool_getAll) {
            return $this->selectAll();
        }
        return $this->findBy([
                    self::COLUMN_LAST_UPDATE . '<' => time() - $this->config->item('time_between_subs_update')
        ]);
    }

}
