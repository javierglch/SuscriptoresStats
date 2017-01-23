<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'models/BaseModels/SubsGamesIdsBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla subs_games_ids
 * -Versión: 
 * -Fecha de creación: 
 * -Última modificación: 
 * -Comentario VIEW
 * -Numero de columnas: 3
 * 
 * @author Javier
 */
class SubsGamesIds extends SubsGamesIdsBase {
    
    /**
     * Constructor
     * @param $idsubs_games_ids binary(0) 
     * @param $idsuscriptor int(11) 
     * @param $gameId double 
     * 
     */
    function __construct($idsubs_games_ids=null,$idsuscriptor=null,$gameId=null) {
        parent::__construct($idsubs_games_ids, $idsuscriptor, $gameId);
    }
    
    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES
    

}
