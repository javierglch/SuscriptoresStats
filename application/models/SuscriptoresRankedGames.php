<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'models/BaseModels/SuscriptoresRankedGamesBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla suscriptores_ranked_games
 * -Versión: 10
 * -Fecha de creación: 2017-01-20 23:30:35
 * -Última modificación: 
 * -Comentario TABLA RELACIONAL
 * -Numero de columnas: 3
 * 
 * @author Javier
 */
class SuscriptoresRankedGames extends SuscriptoresRankedGamesBase {
    
    /**
     * Constructor
     * @param $idsuscriptores_ranked_games int(11) 
     * @param $idsuscriptor int(11) 
     * @param $idranked_game int(11) 
     * 
     */
    function __construct($idsuscriptores_ranked_games=null,$idsuscriptor=null,$idranked_game=null) {
        parent::__construct($idsuscriptores_ranked_games, $idsuscriptor, $idranked_game);
    }
    
    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES
    

}
