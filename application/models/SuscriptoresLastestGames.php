<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'models/BaseModels/SuscriptoresLastestGamesBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla suscriptores_lastest_games
 * -Versión: 10
 * -Fecha de creación: 2017-01-20 23:38:30
 * -Última modificación: 
 * -Comentario 
 * -Numero de columnas: 3
 * 
 * @author Javier
 */
class SuscriptoresLastestGames extends SuscriptoresLastestGamesBase {
    
    /**
     * Constructor
     * @param $idsuscriptores_lastest_games int(11) 
     * @param $idsuscriptor int(11) 
     * @param $idlastest_game int(11) 
     * 
     */
    function __construct($idsuscriptores_lastest_games=null,$idsuscriptor=null,$idlastest_game=null) {
        parent::__construct($idsuscriptores_lastest_games, $idsuscriptor, $idlastest_game);
    }
    
    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES
    

}
