<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'models/BaseModels/SubsAllGamesBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla subs_all_games
 * -Versión: 
 * -Fecha de creación: 
 * -Última modificación: 
 * -Comentario VIEW
 * -Numero de columnas: 16
 * 
 * @author Javier
 */
class SubsAllGames extends SubsAllGamesBase {
    
    /**
     * Constructor
     * @param $idsubs_all_games binary(0) 
     * @param $idsuscriptor int(11) 
     * @param $summoner_id int(11) 
     * @param $region varchar(45) 
     * @param $summoner_name varchar(45) 
     * @param $game_id double 
     * @param $champion int(11) 
     * @param $queue varchar(45) 
     * @param $season varchar(25) 
     * @param $created_date double 
     * @param $lane varchar(10) 
     * @param $role varchar(10) 
     * @param $kills int(11) 
     * @param $deaths int(11) 
     * @param $assits int(11) 
     * @param $kda double 
     * 
     */
    function __construct($idsubs_all_games=null,$idsuscriptor=null,$summoner_id=null,$region=null,$summoner_name=null,$game_id=null,$champion=null,$queue=null,$season=null,$created_date=null,$lane=null,$role=null,$kills=null,$deaths=null,$assits=null,$kda=null) {
        parent::__construct($idsubs_all_games, $idsuscriptor, $summoner_id, $region, $summoner_name, $game_id, $champion, $queue, $season, $created_date, $lane, $role, $kills, $deaths, $assits, $kda);
    }
    
    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES
    

}
