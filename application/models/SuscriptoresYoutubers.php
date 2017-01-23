<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'models/BaseModels/SuscriptoresYoutubersBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla suscriptores_youtubers
 * -Versión: 10
 * -Fecha de creación: 2017-01-20 23:25:00
 * -Última modificación: 
 * -Comentario 
 * -Numero de columnas: 3
 * 
 * @author Javier
 */
class SuscriptoresYoutubers extends SuscriptoresYoutubersBase {
    
    /**
     * Constructor
     * @param $idsuscriptores_youtubers int(11) 
     * @param $idsuscriptor int(11) 
     * @param $idyoutuber int(11) 
     * 
     */
    function __construct($idsuscriptores_youtubers=null,$idsuscriptor=null,$idyoutuber=null) {
        parent::__construct($idsuscriptores_youtubers, $idsuscriptor, $idyoutuber);
    }
    
    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES
    

}
