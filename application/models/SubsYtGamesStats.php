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
     * @param int $division
     * @param int $yt_id
     * @return mixed
     */
    public function getChampionStatsBy($from_timestamp, $to_timestamp, $division, $yt_id) {

        //CREAMOS Y EJECUTAMOS SQL
        $numberUnions = ($to_timestamp - $from_timestamp) / $division;
        $sql = [];
        for ($i = 0; $i < $numberUnions; $i++) {
            $from = $from_timestamp + $division * $i;
            $to = $from_timestamp + $division * ($i + 1);
            $sql[] = 'select ' . self::COLUMN_CHAMPION . ', count(' . self::COLUMN_CHAMPION . ') as games_played, "' . date('d/m/Y', $from / 1000) . '" as fechas, ' . ($from / 1000) . ' as from_timestamp from ' . self::TABLE_NAME . ' where cast(' . self::COLUMN_CREATED_DATE . ' as int) BETWEEN ' . ($from) . ' AND ' . ($to) . ' and ' . self::COLUMN_IDYOUTUBER . '=' . $yt_id . ' group by ' . self::COLUMN_CHAMPION;
        }
        $query = implode(' union ', $sql);
        $aRS = $this->db->query($query)->result_array();

        //CREAMOS EL OBJETO INICIAL
        \LolApi\LolApi::globalApi()->LolApiConfig->active_debug = true;
        \LolApi\LolApi::globalApi()->LolApiConfig->force_get_cache = true;
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
                'from_timestamp' => date('d', $row['from_timestamp']),
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

    /**
     * recupera el numero total de partidas que existen entre las fechas solicitadas
     * @param int $from_timestamp
     * @param int $to_timestamp
     * @param int $yt_id
     * @return int
     */
    public function getTotalGames($from_timestamp, $to_timestamp, $yt_id) {
        $query = 'select count(*) as c from ' . self::TABLE_NAME . ' where cast(' . self::COLUMN_CREATED_DATE . ' as int) BETWEEN ' . ($from_timestamp) . ' AND ' . ($to_timestamp) . ' and ' . self::COLUMN_IDYOUTUBER . '=' . $yt_id;
        return $this->db->query($query)->row_array(0)['c'];
    }

}
