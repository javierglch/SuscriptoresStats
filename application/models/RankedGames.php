<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'models/BaseModels/RankedGamesBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla ranked_games
 * -Versión: 10
 * -Fecha de creación: 2017-01-20 23:36:49
 * -Última modificación: 
 * -Comentario 
 * -Numero de columnas: 12
 * 
 * @author Javier
 */
class RankedGames extends RankedGamesBase {
    
    /**
     * Constructor
     * @param $idranked_games int(11) 
     * @param $matchId int(11) 
     * @param $champion int(11) 
     * @param $queue varchar(25) 
     * @param $season varchar(15) 
     * @param $timestamp int(15) 
     * @param $lane varchar(10) 
     * @param $role varchar(10) 
     * @param $kills int(11) 
     * @param $deaths int(11) 
     * @param $assists int(11) 
     * @param $kda int(11) 
     * 
     */
    function __construct($idranked_games=null,$matchId=null,$champion=null,$queue=null,$season=null,$timestamp=null,$lane=null,$role=null,$kills=null,$deaths=null,$assists=null,$kda=null) {
        parent::__construct($idranked_games, $matchId, $champion, $queue, $season, $timestamp, $lane, $role, $kills, $deaths, $assists, $kda);
    }
    
    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES
    

}
