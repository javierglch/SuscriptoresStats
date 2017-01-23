<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'models/BaseModels/LastestGamesBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla lastest_games
 * -Versión: 10
 * -Fecha de creación: 2017-01-20 23:36:21
 * -Última modificación: 
 * -Comentario 
 * -Numero de columnas: 12
 * 
 * @author Javier
 */
class LastestGames extends LastestGamesBase {
    
    /**
     * Constructor
     * @param $idlastest_games int(11) 
     * @param $gameId int(15) 
     * @param $champion int(11) 
     * @param $gameMode varchar(25) EJ: CLASSIC
     * @param $gameType varchar(25) EJ: MATCHED_GAME
     * @param $subType varchar(25) EJ: RANKED_SOLO_5x5
     * @param $season varchar(15) 
     * @param $createDate int(15) 
     * @param $kills int(11) 
     * @param $deaths int(11) 
     * @param $assists int(11) 
     * @param $kda int(11) 
     * 
     */
    function __construct($idlastest_games=null,$gameId=null,$champion=null,$gameMode=null,$gameType=null,$subType=null,$season=null,$createDate=null,$kills=null,$deaths=null,$assists=null,$kda=null) {
        parent::__construct($idlastest_games, $gameId, $champion, $gameMode, $gameType, $subType, $season, $createDate, $kills, $deaths, $assists, $kda);
    }
    
    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES
    

}
