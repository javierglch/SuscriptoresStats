<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'models/BaseModels/SubsYtJoinBase.php';

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla subs_yt_join
 * -Versión: 
 * -Fecha de creación: 
 * -Última modificación: 
 * -Comentario VIEW
 * -Numero de columnas: 23
 * 
 * @author Javier
 */
class SubsYtJoin extends SubsYtJoinBase {
    
    /**
     * Constructor
     * @param $sub_idsuscriptores int(11) 
     * @param $sub_summoner_id int(11) id del invocador
     * @param $sub_region varchar(45) region, euw, lan, las
     * @param $sub_summoner_name varchar(45) nombre del invocador
     * @param $sub_registration_date int(11) unix_timestamp
     * @param $sub_last_update int(11) unix_timestamp
     * @param $sub_tier varchar(45) tier: oro, bronce, challenger, etc
     * @param $sub_division varchar(45) division I, II, III, IV, V
     * @param $sub_lp int(11) league points
     * @param $yt_idyoutubers int(11) 
     * @param $yt_channel_url varchar(255) 
     * @param $yt_email varchar(50) 
     * @param $yt_registration_date int(11) 
     * @param $yt_app_custom_url varchar(50) URL PARA LA APLICACION
     * @param $yt_last_video varchar(50) 
     * @param $yt_last_update int(11) 
     * @param $yt_email_verified int(1) 
     * @param $yt_last_visit int(11) 
     * @param $yt_last_ip varchar(45) TIPO DE CUENTA:
1 = normal
2 = admin
     * @param $yt_logo_icon varchar(50) 
     * @param $yt_logo_icon_medium varchar(50) 
     * @param $yt_custom_sub_msg text 
     * @param $yt_custom_sub_msg_register text Texto que sale cuando el usuario ha terminado de registrarse
     * 
     */
    function __construct($sub_idsuscriptores=null,$sub_summoner_id=null,$sub_region=null,$sub_summoner_name=null,$sub_registration_date=null,$sub_last_update=null,$sub_tier=null,$sub_division=null,$sub_lp=null,$yt_idyoutubers=null,$yt_channel_url=null,$yt_email=null,$yt_registration_date=null,$yt_app_custom_url=null,$yt_last_video=null,$yt_last_update=null,$yt_email_verified=null,$yt_last_visit=null,$yt_last_ip=null,$yt_logo_icon=null,$yt_logo_icon_medium=null,$yt_custom_sub_msg=null,$yt_custom_sub_msg_register=null) {
        parent::__construct($sub_idsuscriptores, $sub_summoner_id, $sub_region, $sub_summoner_name, $sub_registration_date, $sub_last_update, $sub_tier, $sub_division, $sub_lp, $yt_idyoutubers, $yt_channel_url, $yt_email, $yt_registration_date, $yt_app_custom_url, $yt_last_video, $yt_last_update, $yt_email_verified, $yt_last_visit, $yt_last_ip, $yt_logo_icon, $yt_logo_icon_medium, $yt_custom_sub_msg, $yt_custom_sub_msg_register);
    }
    
    ## AÑADIR A PARTIR DE AQUÍ NUEVAS FUNCIONES
    


}
