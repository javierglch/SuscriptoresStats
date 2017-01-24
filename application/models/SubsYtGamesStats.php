<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'models/BaseModels/SubsYtGamesStatsBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla subs_yt_games_stats
 * -Versión: 
 * -Fecha de creación: 
 * -Última modificación: 
 * -Comentario VIEW
 * -Numero de columnas: 12
 * 
 * @author Javier
 */
class SubsYtGamesStats extends SubsYtGamesStatsBase {

    /**
     * Constructor
     * @param $idsubs_yt_games_stats binary(0) 
     * @param $idsuscriptor int(11) 
     * @param $idyoutuber int(11) 
     * @param $summoner_id int(11) 
     * @param $region varchar(45) 
     * @param $game_id double 
     * @param $champion int(11) 
     * @param $queue varchar(45) 
     * @param $season varchar(25) 
     * @param $created_date double 
     * @param $lane varchar(10) 
     * @param $role varchar(10) 
     * 
     */
    function __construct($idsubs_yt_games_stats = null, $idsuscriptor = null, $idyoutuber = null, $summoner_id = null, $region = null, $game_id = null, $champion = null, $queue = null, $season = null, $created_date = null, $lane = null, $role = null) {
        parent::__construct($idsubs_yt_games_stats, $idsuscriptor, $idyoutuber, $summoner_id, $region, $game_id, $champion, $queue, $season, $created_date, $lane, $role);
    }

    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES

    /**
     * recupera las estadisticas de campeones
     * @param int $from_timestamp
     * @param int $to_timestamp
     * @param int $division_type 1 agrupar por dias, 2 agrupar por semanas, 3 agrupar por meses
     * @param int $yt_id
     * @return mixed
     */
    public function getChampionStatsBy($from_timestamp, $to_timestamp, int $division_type, $yt_id, &$totalGames = 0) {

        // damos valores segun el tipo de division
        switch ($division_type) {
            case 2://semanas
                $fecha_format = '%v-%Y';
                $division = 604800 * 1000;
                break;
            case 3: //meses
                $fecha_format = '%m-%Y';
                $division = 2592000 * 1000;
                break;
            default: //1 dia
                $fecha_format = '%d-%m-%Y';
                $division = 86400 * 1000;
        }

        //CREAMOS Y EJECUTAMOS SQL
        $numberUnions = ($to_timestamp - $from_timestamp) / $division;
        $sql = [];
        for ($i = 0; $i < $numberUnions; $i++) {
            $from = $from_timestamp + $division * $i;
            $to = $from_timestamp + $division * ($i + 1);
            $sql[] = '(SELECT 
                        lg.gameId AS game_id, 
                        lg.champion AS champion,
                        lg.createDate AS create_date
                    FROM suscriptores_youtubers sy
                            INNER JOIN suscriptores_lastest_games slg ON slg.idsuscriptor=sy.idsuscriptor
                            INNER JOIN lastest_games lg ON lg.idlastest_games = slg.idlastest_game
                    WHERE sy.idyoutuber=' . $yt_id . ' AND createDate between ' . $from . ' and ' . $to . ')
                    UNION
                    (SELECT 
                            rg.matchId AS game_id, 
                            rg.champion AS champion,
                            rg.timestamp AS create_date
                    FROM suscriptores_youtubers sy
                            INNER JOIN suscriptores_ranked_games srg ON srg.idsuscriptor=sy.idsuscriptor
                            INNER JOIN ranked_games rg ON rg.idranked_games = srg.idranked_game
                    WHERE sy.idyoutuber=' . $yt_id . ' AND `timestamp` between ' . $from . ' and ' . $to . ')';
        }
        $query = implode(' union ', $sql);
        $query = 'SELECT champion, count(*) as games_played, DATE_FORMAT(FROM_UNIXTIME(`create_date`/1000), \'' . $fecha_format . '\') as fechas, create_date as `from_timestamp` FROM '
                . '(SELECT champion, game_id, min(create_date) as create_date FROM (' . $query . ') as tpm GROUP BY game_id, champion) as tmp2'
                . ' GROUP BY fechas, champion order by champion, fechas, count(*) desc;';
        $aRS = $this->db->query($query)->result_array();

        //CREAMOS EL OBJETO INICIAL
        $championList = LolApi\LolApi::globalApi()->getStaticChampionListDto(null, true)->data;
        $aChampStats = [];
        foreach ($aRS as $row) {
            if (isset($championList[$row['champion']])) {
                $champ_name = $championList[$row['champion']]->name;
            } else {
                $champ_name = '[champ_id:' . $row['champion'] . ']';
            }
            $aChampStats[$champ_name]['stats'][] = [
                'games_played' => $row['games_played'],
                'fechas' => $row['fechas'],
                'from_timestamp' => $row['from_timestamp'],
            ];
        }

        //ORDENAMOS
        foreach ($aChampStats as $champKey => $aStats) {
            $stats = $aStats['stats'];
            usort($stats, function($a, $b) {
                return $a['from_timestamp'] - $b['from_timestamp'] > 0;
            });
            $games = 0;
            foreach ($stats as $key => $value) {
                $totalGames++;
                $games += $value['games_played'];
            }
            $aStats['stats'] = $stats;
            $aStats['total_games'] = $games;
            $aChampStats[$champKey] = $aStats;
        }

        uasort($aChampStats, function($a, $b) {
            return $b['total_games'] - $a['total_games'] > 0;
        });

        return $aChampStats;
    }

}
