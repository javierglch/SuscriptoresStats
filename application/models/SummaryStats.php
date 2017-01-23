<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'models/BaseModels/SummaryStatsBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla summary_stats
 * -Versión: 10
 * -Fecha de creación: 2017-01-22 02:19:13
 * -Última modificación: 
 * -Comentario 
 * -Numero de columnas: 6
 * 
 * @author Javier
 */
class SummaryStats extends SummaryStatsBase {
    
    /**
     * Constructor
     * @param $idsummary_stats int(11) 
     * @param $idsuscriptor int(15) 
     * @param $playerStatSummaryType varchar(30) 
     * @param $wins int(11) 
     * @param $losses int(11) 
     * @param $modifyDate int(15) 
     * 
     */
    function __construct($idsummary_stats=null,$idsuscriptor=null,$playerStatSummaryType=null,$wins=null,$losses=null,$modifyDate=null) {
        parent::__construct($idsummary_stats, $idsuscriptor, $playerStatSummaryType, $wins, $losses, $modifyDate);
    }
    
    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES
    

}
