<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]
 * 
 * Esta clase base es utilizada para el acceso a la base de datos y trae consigo
 * todas las funcionalidades genericas necesarias para ello.
 * 
 * NO MODIFIQUE ESTE ARCHIVO! Si desea agregar propiedades a la base de datos, 
 * hagalo en la clase del modelo, no en la base. La base es generada automaticamente.
 * 
 * Información sobre la tabla subs_yt_join
 * - Versión: 
 * - Fecha de creación: 
 * - Última modificación: 
 * - Comentario VIEW<
 * - Numero de columnas: 27
 * 
 * @author Javier
 */
class SubsYtJoinBase extends CI_Model {

    /**
     * Nombre de la tabla a la que hace referencia el modelo.
     */
    const TABLE_NAME = 'subs_yt_join';

    ### ----------------------------------------------------------------------
    ### Listado de constantes para alojar el nombre de las columnas de la tabla 
    ### -----------------------------------------------------------------------
    
    /**  */ 
    const COLUMN_IDSUBS_YT_JOIN="idsubs_yt_join";
    
    /**  */ 
    const COLUMN_SUB_IDSUSCRIPTORES="sub_idsuscriptores";
    
    /** id del invocador */ 
    const COLUMN_SUB_SUMMONER_ID="sub_summoner_id";
    
    /** region, euw, lan, las */ 
    const COLUMN_SUB_REGION="sub_region";
    
    /** nombre del invocador */ 
    const COLUMN_SUB_SUMMONER_NAME="sub_summoner_name";
    
    /** unix_timestamp */ 
    const COLUMN_SUB_REGISTRATION_DATE="sub_registration_date";
    
    /** unix_timestamp */ 
    const COLUMN_SUB_LAST_UPDATE="sub_last_update";
    
    /** tier: oro, bronce, challenger, etc */ 
    const COLUMN_SUB_TIER="sub_tier";
    
    /** division I, II, III, IV, V */ 
    const COLUMN_SUB_DIVISION="sub_division";
    
    /** league points */ 
    const COLUMN_SUB_LP="sub_lp";
    
    /** puntiacion de ranked:
tier = +500
division = +100
lp = +x */ 
    const COLUMN_SUB_MMR="sub_mmr";
    
    /**  */ 
    const COLUMN_TOTAL_GAMES_REGISTED="total_games_registed";
    
    /**  */ 
    const COLUMN_PREFERED_QUEUE="prefered_queue";
    
    /**  */ 
    const COLUMN_YT_IDYOUTUBERS="yt_idyoutubers";
    
    /**  */ 
    const COLUMN_YT_CHANNEL_URL="yt_channel_url";
    
    /**  */ 
    const COLUMN_YT_EMAIL="yt_email";
    
    /**  */ 
    const COLUMN_YT_REGISTRATION_DATE="yt_registration_date";
    
    /** URL PARA LA APLICACION */ 
    const COLUMN_YT_APP_CUSTOM_URL="yt_app_custom_url";
    
    /**  */ 
    const COLUMN_YT_LAST_VIDEO="yt_last_video";
    
    /**  */ 
    const COLUMN_YT_LAST_UPDATE="yt_last_update";
    
    /**  */ 
    const COLUMN_YT_EMAIL_VERIFIED="yt_email_verified";
    
    /**  */ 
    const COLUMN_YT_LAST_VISIT="yt_last_visit";
    
    /** TIPO DE CUENTA:
1 = normal
2 = admin */ 
    const COLUMN_YT_LAST_IP="yt_last_ip";
    
    /**  */ 
    const COLUMN_YT_LOGO_ICON="yt_logo_icon";
    
    /**  */ 
    const COLUMN_YT_LOGO_ICON_MEDIUM="yt_logo_icon_medium";
    
    /**  */ 
    const COLUMN_YT_CUSTOM_SUB_MSG="yt_custom_sub_msg";
    
    /** Texto que sale cuando el usuario ha terminado de registrarse */ 
    const COLUMN_YT_CUSTOM_SUB_MSG_REGISTER="yt_custom_sub_msg_register";
       
    
    
    ### -----------------------
    ### Listado de variables 
    ### ----------------------
    
    /**  @var binary(0) */ 
    private $idsubs_yt_join;
    
    /**  @var int(11) */ 
    private $sub_idsuscriptores;
    
    /** id del invocador @var int(11) */ 
    private $sub_summoner_id;
    
    /** region, euw, lan, las @var varchar(45) */ 
    private $sub_region;
    
    /** nombre del invocador @var varchar(45) */ 
    private $sub_summoner_name;
    
    /** unix_timestamp @var int(11) */ 
    private $sub_registration_date;
    
    /** unix_timestamp @var int(11) */ 
    private $sub_last_update;
    
    /** tier: oro, bronce, challenger, etc @var varchar(45) */ 
    private $sub_tier;
    
    /** division I, II, III, IV, V @var varchar(45) */ 
    private $sub_division;
    
    /** league points @var int(11) */ 
    private $sub_lp;
    
    /** puntiacion de ranked:
tier = +500
division = +100
lp = +x @var int(11) */ 
    private $sub_mmr;
    
    /**  @var bigint(21) */ 
    private $total_games_registed;
    
    /**  @var varchar(45) */ 
    private $prefered_queue;
    
    /**  @var int(11) */ 
    private $yt_idyoutubers;
    
    /**  @var varchar(255) */ 
    private $yt_channel_url;
    
    /**  @var varchar(50) */ 
    private $yt_email;
    
    /**  @var int(11) */ 
    private $yt_registration_date;
    
    /** URL PARA LA APLICACION @var varchar(50) */ 
    private $yt_app_custom_url;
    
    /**  @var varchar(50) */ 
    private $yt_last_video;
    
    /**  @var int(11) */ 
    private $yt_last_update;
    
    /**  @var int(1) */ 
    private $yt_email_verified;
    
    /**  @var int(11) */ 
    private $yt_last_visit;
    
    /** TIPO DE CUENTA:
1 = normal
2 = admin @var varchar(45) */ 
    private $yt_last_ip;
    
    /**  @var varchar(50) */ 
    private $yt_logo_icon;
    
    /**  @var varchar(50) */ 
    private $yt_logo_icon_medium;
    
    /**  @var text */ 
    private $yt_custom_sub_msg;
    
    /** Texto que sale cuando el usuario ha terminado de registrarse @var text */ 
    private $yt_custom_sub_msg_register;
        

    ### -----------------------

    
    
    ### -----------------------
    ### CONSTRUCTOR
    ### ----------------------

    /**
     * Constructor
     * @param $idsubs_yt_join binary(0) 
     * @param $sub_idsuscriptores int(11) 
     * @param $sub_summoner_id int(11) id del invocador
     * @param $sub_region varchar(45) region, euw, lan, las
     * @param $sub_summoner_name varchar(45) nombre del invocador
     * @param $sub_registration_date int(11) unix_timestamp
     * @param $sub_last_update int(11) unix_timestamp
     * @param $sub_tier varchar(45) tier: oro, bronce, challenger, etc
     * @param $sub_division varchar(45) division I, II, III, IV, V
     * @param $sub_lp int(11) league points
     * @param $sub_mmr int(11) puntiacion de ranked:
tier = +500
division = +100
lp = +x
     * @param $total_games_registed bigint(21) 
     * @param $prefered_queue varchar(45) 
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
    function __construct($idsubs_yt_join=null,$sub_idsuscriptores=null,$sub_summoner_id=null,$sub_region=null,$sub_summoner_name=null,$sub_registration_date=null,$sub_last_update=null,$sub_tier=null,$sub_division=null,$sub_lp=null,$sub_mmr=null,$total_games_registed=null,$prefered_queue=null,$yt_idyoutubers=null,$yt_channel_url=null,$yt_email=null,$yt_registration_date=null,$yt_app_custom_url=null,$yt_last_video=null,$yt_last_update=null,$yt_email_verified=null,$yt_last_visit=null,$yt_last_ip=null,$yt_logo_icon=null,$yt_logo_icon_medium=null,$yt_custom_sub_msg=null,$yt_custom_sub_msg_register=null) {
        $this->idsubs_yt_join = $idsubs_yt_join;
        $this->sub_idsuscriptores = $sub_idsuscriptores;
        $this->sub_summoner_id = $sub_summoner_id;
        $this->sub_region = $sub_region;
        $this->sub_summoner_name = $sub_summoner_name;
        $this->sub_registration_date = $sub_registration_date;
        $this->sub_last_update = $sub_last_update;
        $this->sub_tier = $sub_tier;
        $this->sub_division = $sub_division;
        $this->sub_lp = $sub_lp;
        $this->sub_mmr = $sub_mmr;
        $this->total_games_registed = $total_games_registed;
        $this->prefered_queue = $prefered_queue;
        $this->yt_idyoutubers = $yt_idyoutubers;
        $this->yt_channel_url = $yt_channel_url;
        $this->yt_email = $yt_email;
        $this->yt_registration_date = $yt_registration_date;
        $this->yt_app_custom_url = $yt_app_custom_url;
        $this->yt_last_video = $yt_last_video;
        $this->yt_last_update = $yt_last_update;
        $this->yt_email_verified = $yt_email_verified;
        $this->yt_last_visit = $yt_last_visit;
        $this->yt_last_ip = $yt_last_ip;
        $this->yt_logo_icon = $yt_logo_icon;
        $this->yt_logo_icon_medium = $yt_logo_icon_medium;
        $this->yt_custom_sub_msg = $yt_custom_sub_msg;
        $this->yt_custom_sub_msg_register = $yt_custom_sub_msg_register;
        
    }

    ### -----------------------

    
    
    ### -----------------------
    ### GETTERS Y SETTERS Y TOSTRING
    ### ----------------------

    
    
    /**
     * Devuelve la variable idsubs_yt_join<br>
     * Descripcion de la variable: 
     * @return binary(0)
     */
    public function getIdsubs_yt_join(){
        return $this->idsubs_yt_join;
    }
    /**
     * Devuelve la variable sub_idsuscriptores<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getSub_idsuscriptores(){
        return $this->sub_idsuscriptores;
    }
    /**
     * Devuelve la variable sub_summoner_id<br>
     * Descripcion de la variable: id del invocador
     * @return int(11)
     */
    public function getSub_summoner_id(){
        return $this->sub_summoner_id;
    }
    /**
     * Devuelve la variable sub_region<br>
     * Descripcion de la variable: region, euw, lan, las
     * @return varchar(45)
     */
    public function getSub_region(){
        return $this->sub_region;
    }
    /**
     * Devuelve la variable sub_summoner_name<br>
     * Descripcion de la variable: nombre del invocador
     * @return varchar(45)
     */
    public function getSub_summoner_name(){
        return $this->sub_summoner_name;
    }
    /**
     * Devuelve la variable sub_registration_date<br>
     * Descripcion de la variable: unix_timestamp
     * @return int(11)
     */
    public function getSub_registration_date(){
        return $this->sub_registration_date;
    }
    /**
     * Devuelve la variable sub_last_update<br>
     * Descripcion de la variable: unix_timestamp
     * @return int(11)
     */
    public function getSub_last_update(){
        return $this->sub_last_update;
    }
    /**
     * Devuelve la variable sub_tier<br>
     * Descripcion de la variable: tier: oro, bronce, challenger, etc
     * @return varchar(45)
     */
    public function getSub_tier(){
        return $this->sub_tier;
    }
    /**
     * Devuelve la variable sub_division<br>
     * Descripcion de la variable: division I, II, III, IV, V
     * @return varchar(45)
     */
    public function getSub_division(){
        return $this->sub_division;
    }
    /**
     * Devuelve la variable sub_lp<br>
     * Descripcion de la variable: league points
     * @return int(11)
     */
    public function getSub_lp(){
        return $this->sub_lp;
    }
    /**
     * Devuelve la variable sub_mmr<br>
     * Descripcion de la variable: puntiacion de ranked:
tier = +500
division = +100
lp = +x
     * @return int(11)
     */
    public function getSub_mmr(){
        return $this->sub_mmr;
    }
    /**
     * Devuelve la variable total_games_registed<br>
     * Descripcion de la variable: 
     * @return bigint(21)
     */
    public function getTotal_games_registed(){
        return $this->total_games_registed;
    }
    /**
     * Devuelve la variable prefered_queue<br>
     * Descripcion de la variable: 
     * @return varchar(45)
     */
    public function getPrefered_queue(){
        return $this->prefered_queue;
    }
    /**
     * Devuelve la variable yt_idyoutubers<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getYt_idyoutubers(){
        return $this->yt_idyoutubers;
    }
    /**
     * Devuelve la variable yt_channel_url<br>
     * Descripcion de la variable: 
     * @return varchar(255)
     */
    public function getYt_channel_url(){
        return $this->yt_channel_url;
    }
    /**
     * Devuelve la variable yt_email<br>
     * Descripcion de la variable: 
     * @return varchar(50)
     */
    public function getYt_email(){
        return $this->yt_email;
    }
    /**
     * Devuelve la variable yt_registration_date<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getYt_registration_date(){
        return $this->yt_registration_date;
    }
    /**
     * Devuelve la variable yt_app_custom_url<br>
     * Descripcion de la variable: URL PARA LA APLICACION
     * @return varchar(50)
     */
    public function getYt_app_custom_url(){
        return $this->yt_app_custom_url;
    }
    /**
     * Devuelve la variable yt_last_video<br>
     * Descripcion de la variable: 
     * @return varchar(50)
     */
    public function getYt_last_video(){
        return $this->yt_last_video;
    }
    /**
     * Devuelve la variable yt_last_update<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getYt_last_update(){
        return $this->yt_last_update;
    }
    /**
     * Devuelve la variable yt_email_verified<br>
     * Descripcion de la variable: 
     * @return int(1)
     */
    public function getYt_email_verified(){
        return $this->yt_email_verified;
    }
    /**
     * Devuelve la variable yt_last_visit<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getYt_last_visit(){
        return $this->yt_last_visit;
    }
    /**
     * Devuelve la variable yt_last_ip<br>
     * Descripcion de la variable: TIPO DE CUENTA:
1 = normal
2 = admin
     * @return varchar(45)
     */
    public function getYt_last_ip(){
        return $this->yt_last_ip;
    }
    /**
     * Devuelve la variable yt_logo_icon<br>
     * Descripcion de la variable: 
     * @return varchar(50)
     */
    public function getYt_logo_icon(){
        return $this->yt_logo_icon;
    }
    /**
     * Devuelve la variable yt_logo_icon_medium<br>
     * Descripcion de la variable: 
     * @return varchar(50)
     */
    public function getYt_logo_icon_medium(){
        return $this->yt_logo_icon_medium;
    }
    /**
     * Devuelve la variable yt_custom_sub_msg<br>
     * Descripcion de la variable: 
     * @return text
     */
    public function getYt_custom_sub_msg(){
        return $this->yt_custom_sub_msg;
    }
    /**
     * Devuelve la variable yt_custom_sub_msg_register<br>
     * Descripcion de la variable: Texto que sale cuando el usuario ha terminado de registrarse
     * @return text
     */
    public function getYt_custom_sub_msg_register(){
        return $this->yt_custom_sub_msg_register;
    }

    
    /**
     * Pone el valor a la variable idsubs_yt_join<br>
     * Descripcion de la variable: 
     * @param binary(0) $value
     */
    public function setIdsubs_yt_join($value){
        $this->idsubs_yt_join=$value;
    }
    /**
     * Pone el valor a la variable sub_idsuscriptores<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setSub_idsuscriptores($value){
        $this->sub_idsuscriptores=$value;
    }
    /**
     * Pone el valor a la variable sub_summoner_id<br>
     * Descripcion de la variable: id del invocador
     * @param int(11) $value
     */
    public function setSub_summoner_id($value){
        $this->sub_summoner_id=$value;
    }
    /**
     * Pone el valor a la variable sub_region<br>
     * Descripcion de la variable: region, euw, lan, las
     * @param varchar(45) $value
     */
    public function setSub_region($value){
        $this->sub_region=$value;
    }
    /**
     * Pone el valor a la variable sub_summoner_name<br>
     * Descripcion de la variable: nombre del invocador
     * @param varchar(45) $value
     */
    public function setSub_summoner_name($value){
        $this->sub_summoner_name=$value;
    }
    /**
     * Pone el valor a la variable sub_registration_date<br>
     * Descripcion de la variable: unix_timestamp
     * @param int(11) $value
     */
    public function setSub_registration_date($value){
        $this->sub_registration_date=$value;
    }
    /**
     * Pone el valor a la variable sub_last_update<br>
     * Descripcion de la variable: unix_timestamp
     * @param int(11) $value
     */
    public function setSub_last_update($value){
        $this->sub_last_update=$value;
    }
    /**
     * Pone el valor a la variable sub_tier<br>
     * Descripcion de la variable: tier: oro, bronce, challenger, etc
     * @param varchar(45) $value
     */
    public function setSub_tier($value){
        $this->sub_tier=$value;
    }
    /**
     * Pone el valor a la variable sub_division<br>
     * Descripcion de la variable: division I, II, III, IV, V
     * @param varchar(45) $value
     */
    public function setSub_division($value){
        $this->sub_division=$value;
    }
    /**
     * Pone el valor a la variable sub_lp<br>
     * Descripcion de la variable: league points
     * @param int(11) $value
     */
    public function setSub_lp($value){
        $this->sub_lp=$value;
    }
    /**
     * Pone el valor a la variable sub_mmr<br>
     * Descripcion de la variable: puntiacion de ranked:
tier = +500
division = +100
lp = +x
     * @param int(11) $value
     */
    public function setSub_mmr($value){
        $this->sub_mmr=$value;
    }
    /**
     * Pone el valor a la variable total_games_registed<br>
     * Descripcion de la variable: 
     * @param bigint(21) $value
     */
    public function setTotal_games_registed($value){
        $this->total_games_registed=$value;
    }
    /**
     * Pone el valor a la variable prefered_queue<br>
     * Descripcion de la variable: 
     * @param varchar(45) $value
     */
    public function setPrefered_queue($value){
        $this->prefered_queue=$value;
    }
    /**
     * Pone el valor a la variable yt_idyoutubers<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setYt_idyoutubers($value){
        $this->yt_idyoutubers=$value;
    }
    /**
     * Pone el valor a la variable yt_channel_url<br>
     * Descripcion de la variable: 
     * @param varchar(255) $value
     */
    public function setYt_channel_url($value){
        $this->yt_channel_url=$value;
    }
    /**
     * Pone el valor a la variable yt_email<br>
     * Descripcion de la variable: 
     * @param varchar(50) $value
     */
    public function setYt_email($value){
        $this->yt_email=$value;
    }
    /**
     * Pone el valor a la variable yt_registration_date<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setYt_registration_date($value){
        $this->yt_registration_date=$value;
    }
    /**
     * Pone el valor a la variable yt_app_custom_url<br>
     * Descripcion de la variable: URL PARA LA APLICACION
     * @param varchar(50) $value
     */
    public function setYt_app_custom_url($value){
        $this->yt_app_custom_url=$value;
    }
    /**
     * Pone el valor a la variable yt_last_video<br>
     * Descripcion de la variable: 
     * @param varchar(50) $value
     */
    public function setYt_last_video($value){
        $this->yt_last_video=$value;
    }
    /**
     * Pone el valor a la variable yt_last_update<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setYt_last_update($value){
        $this->yt_last_update=$value;
    }
    /**
     * Pone el valor a la variable yt_email_verified<br>
     * Descripcion de la variable: 
     * @param int(1) $value
     */
    public function setYt_email_verified($value){
        $this->yt_email_verified=$value;
    }
    /**
     * Pone el valor a la variable yt_last_visit<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setYt_last_visit($value){
        $this->yt_last_visit=$value;
    }
    /**
     * Pone el valor a la variable yt_last_ip<br>
     * Descripcion de la variable: TIPO DE CUENTA:
1 = normal
2 = admin
     * @param varchar(45) $value
     */
    public function setYt_last_ip($value){
        $this->yt_last_ip=$value;
    }
    /**
     * Pone el valor a la variable yt_logo_icon<br>
     * Descripcion de la variable: 
     * @param varchar(50) $value
     */
    public function setYt_logo_icon($value){
        $this->yt_logo_icon=$value;
    }
    /**
     * Pone el valor a la variable yt_logo_icon_medium<br>
     * Descripcion de la variable: 
     * @param varchar(50) $value
     */
    public function setYt_logo_icon_medium($value){
        $this->yt_logo_icon_medium=$value;
    }
    /**
     * Pone el valor a la variable yt_custom_sub_msg<br>
     * Descripcion de la variable: 
     * @param text $value
     */
    public function setYt_custom_sub_msg($value){
        $this->yt_custom_sub_msg=$value;
    }
    /**
     * Pone el valor a la variable yt_custom_sub_msg_register<br>
     * Descripcion de la variable: Texto que sale cuando el usuario ha terminado de registrarse
     * @param text $value
     */
    public function setYt_custom_sub_msg_register($value){
        $this->yt_custom_sub_msg_register=$value;
    }

    function __toString() {
        return '<pre>' . print_r($this, true) . '</pre>';
    }

    ### -----------------------
    
    
    
    ### -----------------------
    ### Funciones genericas para el acceso a la base de datos 
    ### -----------------------

    /**
     * 
     * @param array $aVars <pre>array asociativo con los nombres de las variables y su valor, ejemplo:
     * $aVars = [
     * "nombreVariableDeLaClase" => "valor de la variable"
     * ]</pre>
     * @return SubsYtJoin
     */
     public function constructFromArray($aVars) {
        $av = get_class_vars(self::class);
        foreach ($av as $v => $d) {
            $this->$v=null;
        }
        if(isset($aVars)){
            foreach ($aVars as $column => $value) {
                $this->$column = $value;
            }
        }
        return $this;
    }

    ##SENTENCIAS SELECT##

    /**
     * Recupera la primera fila del registro teniendo en cuenta los valores dados
     * a las variables y creando automaticamente la clausula where.
     * @return SubsYtJoin
     */
    public function findOne() {
        $aWhereClause=[];
        
            if (isset($this->idsubs_yt_join)) {
                $aWhereClause["idsubs_yt_join"] = $this->idsubs_yt_join;
            }
        
            if (isset($this->sub_idsuscriptores)) {
                $aWhereClause["sub_idsuscriptores"] = $this->sub_idsuscriptores;
            }
        
            if (isset($this->sub_summoner_id)) {
                $aWhereClause["sub_summoner_id"] = $this->sub_summoner_id;
            }
        
            if (isset($this->sub_region)) {
                $aWhereClause["sub_region"] = $this->sub_region;
            }
        
            if (isset($this->sub_summoner_name)) {
                $aWhereClause["sub_summoner_name"] = $this->sub_summoner_name;
            }
        
            if (isset($this->sub_registration_date)) {
                $aWhereClause["sub_registration_date"] = $this->sub_registration_date;
            }
        
            if (isset($this->sub_last_update)) {
                $aWhereClause["sub_last_update"] = $this->sub_last_update;
            }
        
            if (isset($this->sub_tier)) {
                $aWhereClause["sub_tier"] = $this->sub_tier;
            }
        
            if (isset($this->sub_division)) {
                $aWhereClause["sub_division"] = $this->sub_division;
            }
        
            if (isset($this->sub_lp)) {
                $aWhereClause["sub_lp"] = $this->sub_lp;
            }
        
            if (isset($this->sub_mmr)) {
                $aWhereClause["sub_mmr"] = $this->sub_mmr;
            }
        
            if (isset($this->total_games_registed)) {
                $aWhereClause["total_games_registed"] = $this->total_games_registed;
            }
        
            if (isset($this->prefered_queue)) {
                $aWhereClause["prefered_queue"] = $this->prefered_queue;
            }
        
            if (isset($this->yt_idyoutubers)) {
                $aWhereClause["yt_idyoutubers"] = $this->yt_idyoutubers;
            }
        
            if (isset($this->yt_channel_url)) {
                $aWhereClause["yt_channel_url"] = $this->yt_channel_url;
            }
        
            if (isset($this->yt_email)) {
                $aWhereClause["yt_email"] = $this->yt_email;
            }
        
            if (isset($this->yt_registration_date)) {
                $aWhereClause["yt_registration_date"] = $this->yt_registration_date;
            }
        
            if (isset($this->yt_app_custom_url)) {
                $aWhereClause["yt_app_custom_url"] = $this->yt_app_custom_url;
            }
        
            if (isset($this->yt_last_video)) {
                $aWhereClause["yt_last_video"] = $this->yt_last_video;
            }
        
            if (isset($this->yt_last_update)) {
                $aWhereClause["yt_last_update"] = $this->yt_last_update;
            }
        
            if (isset($this->yt_email_verified)) {
                $aWhereClause["yt_email_verified"] = $this->yt_email_verified;
            }
        
            if (isset($this->yt_last_visit)) {
                $aWhereClause["yt_last_visit"] = $this->yt_last_visit;
            }
        
            if (isset($this->yt_last_ip)) {
                $aWhereClause["yt_last_ip"] = $this->yt_last_ip;
            }
        
            if (isset($this->yt_logo_icon)) {
                $aWhereClause["yt_logo_icon"] = $this->yt_logo_icon;
            }
        
            if (isset($this->yt_logo_icon_medium)) {
                $aWhereClause["yt_logo_icon_medium"] = $this->yt_logo_icon_medium;
            }
        
            if (isset($this->yt_custom_sub_msg)) {
                $aWhereClause["yt_custom_sub_msg"] = $this->yt_custom_sub_msg;
            }
        
            if (isset($this->yt_custom_sub_msg_register)) {
                $aWhereClause["yt_custom_sub_msg_register"] = $this->yt_custom_sub_msg_register;
            }
        
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }
    
    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param array $aWhereClause array asociativo para la clausula where, por ejemplo, si
     * escribimos ["id"=>5], se traduce en el select al estilo: select * from table where id=5 limit 1.
     * @return SubsYtJoin
     */
    public function findOneBy(array $aWhereClause) {
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }

    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param int $id id de la fila que queremos recuperar (en caso de ser diferente
     * al paremetro que se almacena en el objeto de la clase con la variable idsubs_yt_join
     * @return SubsYtJoin
     */
    public function findOneById($id = null) {
        return $this->findOneBy(["idsubs_yt_join" => ($id != null) ? $id : $this->idsubs_yt_join]);
    }

   
    /**
     * Recupera la todas las filas teniendo en cuenta los valores dados
     * a las variables y creando automaticamente la clausula where.
     * @return SubsYtJoin
     */
    public function find() {
        $aWhereClause=[];
        
            if (isset($this->idsubs_yt_join)) {
                $aWhereClause["idsubs_yt_join"] = $this->idsubs_yt_join;
            }
        
            if (isset($this->sub_idsuscriptores)) {
                $aWhereClause["sub_idsuscriptores"] = $this->sub_idsuscriptores;
            }
        
            if (isset($this->sub_summoner_id)) {
                $aWhereClause["sub_summoner_id"] = $this->sub_summoner_id;
            }
        
            if (isset($this->sub_region)) {
                $aWhereClause["sub_region"] = $this->sub_region;
            }
        
            if (isset($this->sub_summoner_name)) {
                $aWhereClause["sub_summoner_name"] = $this->sub_summoner_name;
            }
        
            if (isset($this->sub_registration_date)) {
                $aWhereClause["sub_registration_date"] = $this->sub_registration_date;
            }
        
            if (isset($this->sub_last_update)) {
                $aWhereClause["sub_last_update"] = $this->sub_last_update;
            }
        
            if (isset($this->sub_tier)) {
                $aWhereClause["sub_tier"] = $this->sub_tier;
            }
        
            if (isset($this->sub_division)) {
                $aWhereClause["sub_division"] = $this->sub_division;
            }
        
            if (isset($this->sub_lp)) {
                $aWhereClause["sub_lp"] = $this->sub_lp;
            }
        
            if (isset($this->sub_mmr)) {
                $aWhereClause["sub_mmr"] = $this->sub_mmr;
            }
        
            if (isset($this->total_games_registed)) {
                $aWhereClause["total_games_registed"] = $this->total_games_registed;
            }
        
            if (isset($this->prefered_queue)) {
                $aWhereClause["prefered_queue"] = $this->prefered_queue;
            }
        
            if (isset($this->yt_idyoutubers)) {
                $aWhereClause["yt_idyoutubers"] = $this->yt_idyoutubers;
            }
        
            if (isset($this->yt_channel_url)) {
                $aWhereClause["yt_channel_url"] = $this->yt_channel_url;
            }
        
            if (isset($this->yt_email)) {
                $aWhereClause["yt_email"] = $this->yt_email;
            }
        
            if (isset($this->yt_registration_date)) {
                $aWhereClause["yt_registration_date"] = $this->yt_registration_date;
            }
        
            if (isset($this->yt_app_custom_url)) {
                $aWhereClause["yt_app_custom_url"] = $this->yt_app_custom_url;
            }
        
            if (isset($this->yt_last_video)) {
                $aWhereClause["yt_last_video"] = $this->yt_last_video;
            }
        
            if (isset($this->yt_last_update)) {
                $aWhereClause["yt_last_update"] = $this->yt_last_update;
            }
        
            if (isset($this->yt_email_verified)) {
                $aWhereClause["yt_email_verified"] = $this->yt_email_verified;
            }
        
            if (isset($this->yt_last_visit)) {
                $aWhereClause["yt_last_visit"] = $this->yt_last_visit;
            }
        
            if (isset($this->yt_last_ip)) {
                $aWhereClause["yt_last_ip"] = $this->yt_last_ip;
            }
        
            if (isset($this->yt_logo_icon)) {
                $aWhereClause["yt_logo_icon"] = $this->yt_logo_icon;
            }
        
            if (isset($this->yt_logo_icon_medium)) {
                $aWhereClause["yt_logo_icon_medium"] = $this->yt_logo_icon_medium;
            }
        
            if (isset($this->yt_custom_sub_msg)) {
                $aWhereClause["yt_custom_sub_msg"] = $this->yt_custom_sub_msg;
            }
        
            if (isset($this->yt_custom_sub_msg_register)) {
                $aWhereClause["yt_custom_sub_msg_register"] = $this->yt_custom_sub_msg_register;
            }
        
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SubsYtJoin();
            $o->constructFromArray($aRow);
            array_push($aResults, $o);
        }
        return $aResults;
    }
    
    /**
     * Recupera todos los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table.<br>
     * Además construye los objetos
     * @param array $aWhereClause array asociativo para la clausula where, por ejemplo, si
     * escribimos ["name"=>"juan"], se traduce en el select al estilo: select * from table name="juan"
     * @return SubsYtJoin array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function findBy(array $aWhereClause) {
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SubsYtJoin();
            $o->constructFromArray($aRow);
            array_push($aResults, $o);
        }
        return $aResults;
    }

    
    /**
     * Recupera todos los registros de la tabla
     * @return SubsYtJoin array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function selectAll() {
        $aRows = $this->db->select('*')->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SubsYtJoin();
            $o->constructFromArray($aRow);
            array_push($aResults, $o);
        }
        return $aResults;
    }

    ##SENTENCIAS INSERT##

    /**
     * Inserta un registro en la base de datos. Si no se pasa parametro, se toma como valores
     * los valores que contienen las varaibles de la clase.
     * @param array $aData es el array con los valores que desean ser insertados, es importante
     * el nombrar la clave / key del array exactamente igual a la columna en la base de datos
     * @return bool TRUE on success, FALSE on failure
     */
    public function insert(array $aData = []) {
        if (count($aData) == 0) {
            
            if (isset($this->idsubs_yt_join)) {
                $aData["idsubs_yt_join"] = $this->idsubs_yt_join;
            }
        
            if (isset($this->sub_idsuscriptores)) {
                $aData["sub_idsuscriptores"] = $this->sub_idsuscriptores;
            }
        
            if (isset($this->sub_summoner_id)) {
                $aData["sub_summoner_id"] = $this->sub_summoner_id;
            }
        
            if (isset($this->sub_region)) {
                $aData["sub_region"] = $this->sub_region;
            }
        
            if (isset($this->sub_summoner_name)) {
                $aData["sub_summoner_name"] = $this->sub_summoner_name;
            }
        
            if (isset($this->sub_registration_date)) {
                $aData["sub_registration_date"] = $this->sub_registration_date;
            }
        
            if (isset($this->sub_last_update)) {
                $aData["sub_last_update"] = $this->sub_last_update;
            }
        
            if (isset($this->sub_tier)) {
                $aData["sub_tier"] = $this->sub_tier;
            }
        
            if (isset($this->sub_division)) {
                $aData["sub_division"] = $this->sub_division;
            }
        
            if (isset($this->sub_lp)) {
                $aData["sub_lp"] = $this->sub_lp;
            }
        
            if (isset($this->sub_mmr)) {
                $aData["sub_mmr"] = $this->sub_mmr;
            }
        
            if (isset($this->total_games_registed)) {
                $aData["total_games_registed"] = $this->total_games_registed;
            }
        
            if (isset($this->prefered_queue)) {
                $aData["prefered_queue"] = $this->prefered_queue;
            }
        
            if (isset($this->yt_idyoutubers)) {
                $aData["yt_idyoutubers"] = $this->yt_idyoutubers;
            }
        
            if (isset($this->yt_channel_url)) {
                $aData["yt_channel_url"] = $this->yt_channel_url;
            }
        
            if (isset($this->yt_email)) {
                $aData["yt_email"] = $this->yt_email;
            }
        
            if (isset($this->yt_registration_date)) {
                $aData["yt_registration_date"] = $this->yt_registration_date;
            }
        
            if (isset($this->yt_app_custom_url)) {
                $aData["yt_app_custom_url"] = $this->yt_app_custom_url;
            }
        
            if (isset($this->yt_last_video)) {
                $aData["yt_last_video"] = $this->yt_last_video;
            }
        
            if (isset($this->yt_last_update)) {
                $aData["yt_last_update"] = $this->yt_last_update;
            }
        
            if (isset($this->yt_email_verified)) {
                $aData["yt_email_verified"] = $this->yt_email_verified;
            }
        
            if (isset($this->yt_last_visit)) {
                $aData["yt_last_visit"] = $this->yt_last_visit;
            }
        
            if (isset($this->yt_last_ip)) {
                $aData["yt_last_ip"] = $this->yt_last_ip;
            }
        
            if (isset($this->yt_logo_icon)) {
                $aData["yt_logo_icon"] = $this->yt_logo_icon;
            }
        
            if (isset($this->yt_logo_icon_medium)) {
                $aData["yt_logo_icon_medium"] = $this->yt_logo_icon_medium;
            }
        
            if (isset($this->yt_custom_sub_msg)) {
                $aData["yt_custom_sub_msg"] = $this->yt_custom_sub_msg;
            }
        
            if (isset($this->yt_custom_sub_msg_register)) {
                $aData["yt_custom_sub_msg_register"] = $this->yt_custom_sub_msg_register;
            }
        
        }

        return $this->db->insert(self::TABLE_NAME, $aData);
    }

    /**
     * Inserta un registro en la base de datos en caso de que no exista.
     * <br>Si no se pasa parametro, se toma como valores
     * los valores que contienen las varaibles de la clase.
     * @param array $aData es el array con los valores que desean ser insertados, es importante
     * el nombrar la clave / key del array exactamente igual a la columna en la base de datos
     * @throws Exception En caso de que el valor ya exista, lanza una excepcion con codigo 10000
     * @return bool TRUE on success, FALSE on failure
     */
    public function insertUnique(array $aData = []) {
        if (count($aData) == 0) {
            
            if (isset($this->idsubs_yt_join)) {
                $aData["idsubs_yt_join"] = $this->idsubs_yt_join;
            }
        
            if (isset($this->sub_idsuscriptores)) {
                $aData["sub_idsuscriptores"] = $this->sub_idsuscriptores;
            }
        
            if (isset($this->sub_summoner_id)) {
                $aData["sub_summoner_id"] = $this->sub_summoner_id;
            }
        
            if (isset($this->sub_region)) {
                $aData["sub_region"] = $this->sub_region;
            }
        
            if (isset($this->sub_summoner_name)) {
                $aData["sub_summoner_name"] = $this->sub_summoner_name;
            }
        
            if (isset($this->sub_registration_date)) {
                $aData["sub_registration_date"] = $this->sub_registration_date;
            }
        
            if (isset($this->sub_last_update)) {
                $aData["sub_last_update"] = $this->sub_last_update;
            }
        
            if (isset($this->sub_tier)) {
                $aData["sub_tier"] = $this->sub_tier;
            }
        
            if (isset($this->sub_division)) {
                $aData["sub_division"] = $this->sub_division;
            }
        
            if (isset($this->sub_lp)) {
                $aData["sub_lp"] = $this->sub_lp;
            }
        
            if (isset($this->sub_mmr)) {
                $aData["sub_mmr"] = $this->sub_mmr;
            }
        
            if (isset($this->total_games_registed)) {
                $aData["total_games_registed"] = $this->total_games_registed;
            }
        
            if (isset($this->prefered_queue)) {
                $aData["prefered_queue"] = $this->prefered_queue;
            }
        
            if (isset($this->yt_idyoutubers)) {
                $aData["yt_idyoutubers"] = $this->yt_idyoutubers;
            }
        
            if (isset($this->yt_channel_url)) {
                $aData["yt_channel_url"] = $this->yt_channel_url;
            }
        
            if (isset($this->yt_email)) {
                $aData["yt_email"] = $this->yt_email;
            }
        
            if (isset($this->yt_registration_date)) {
                $aData["yt_registration_date"] = $this->yt_registration_date;
            }
        
            if (isset($this->yt_app_custom_url)) {
                $aData["yt_app_custom_url"] = $this->yt_app_custom_url;
            }
        
            if (isset($this->yt_last_video)) {
                $aData["yt_last_video"] = $this->yt_last_video;
            }
        
            if (isset($this->yt_last_update)) {
                $aData["yt_last_update"] = $this->yt_last_update;
            }
        
            if (isset($this->yt_email_verified)) {
                $aData["yt_email_verified"] = $this->yt_email_verified;
            }
        
            if (isset($this->yt_last_visit)) {
                $aData["yt_last_visit"] = $this->yt_last_visit;
            }
        
            if (isset($this->yt_last_ip)) {
                $aData["yt_last_ip"] = $this->yt_last_ip;
            }
        
            if (isset($this->yt_logo_icon)) {
                $aData["yt_logo_icon"] = $this->yt_logo_icon;
            }
        
            if (isset($this->yt_logo_icon_medium)) {
                $aData["yt_logo_icon_medium"] = $this->yt_logo_icon_medium;
            }
        
            if (isset($this->yt_custom_sub_msg)) {
                $aData["yt_custom_sub_msg"] = $this->yt_custom_sub_msg;
            }
        
            if (isset($this->yt_custom_sub_msg_register)) {
                $aData["yt_custom_sub_msg_register"] = $this->yt_custom_sub_msg_register;
            }
        
        }

        //comprobamos si el resgistro ya existe. En caso de existir pega un throw
        if ($this->db->select('count(*) as c')->where($aData)->get(self::TABLE_NAME)->first_row()->c > 0) {
            throw new Exception('No se puede insertar el registro porque ya existe.',10000);
        }
        //si no se ha producido el throw entonces, lo insertamos.
        return $this->db->insert(self::TABLE_NAME, $aData);
    }

    ##SENTENCIAS UPDATE##

    /**
     * Actualiza la base de datos con los valores pasados.<br>
     * Si la clausula hwere esta vacia o nula, se actualizan todos los registros de la tabla
     * @param array $aWithData dato que se desea actualizar, la key del array debe ser igual
     * a la columna que se quiere actualizar.
     * @param array $aWhereClause clausula where, key=>valor
     * @return bool TRUE on success, FALSE on failure
     */
    public function update(array $aWithData = [], $aWhereClause = null) {
        if (count($aWithData) == 0) {
            
            if (isset($this->sub_idsuscriptores)) {
                $aWithData["sub_idsuscriptores"] = $this->sub_idsuscriptores;
            }
            
            if (isset($this->sub_summoner_id)) {
                $aWithData["sub_summoner_id"] = $this->sub_summoner_id;
            }
            
            if (isset($this->sub_region)) {
                $aWithData["sub_region"] = $this->sub_region;
            }
            
            if (isset($this->sub_summoner_name)) {
                $aWithData["sub_summoner_name"] = $this->sub_summoner_name;
            }
            
            if (isset($this->sub_registration_date)) {
                $aWithData["sub_registration_date"] = $this->sub_registration_date;
            }
            
            if (isset($this->sub_last_update)) {
                $aWithData["sub_last_update"] = $this->sub_last_update;
            }
            
            if (isset($this->sub_tier)) {
                $aWithData["sub_tier"] = $this->sub_tier;
            }
            
            if (isset($this->sub_division)) {
                $aWithData["sub_division"] = $this->sub_division;
            }
            
            if (isset($this->sub_lp)) {
                $aWithData["sub_lp"] = $this->sub_lp;
            }
            
            if (isset($this->sub_mmr)) {
                $aWithData["sub_mmr"] = $this->sub_mmr;
            }
            
            if (isset($this->total_games_registed)) {
                $aWithData["total_games_registed"] = $this->total_games_registed;
            }
            
            if (isset($this->prefered_queue)) {
                $aWithData["prefered_queue"] = $this->prefered_queue;
            }
            
            if (isset($this->yt_idyoutubers)) {
                $aWithData["yt_idyoutubers"] = $this->yt_idyoutubers;
            }
            
            if (isset($this->yt_channel_url)) {
                $aWithData["yt_channel_url"] = $this->yt_channel_url;
            }
            
            if (isset($this->yt_email)) {
                $aWithData["yt_email"] = $this->yt_email;
            }
            
            if (isset($this->yt_registration_date)) {
                $aWithData["yt_registration_date"] = $this->yt_registration_date;
            }
            
            if (isset($this->yt_app_custom_url)) {
                $aWithData["yt_app_custom_url"] = $this->yt_app_custom_url;
            }
            
            if (isset($this->yt_last_video)) {
                $aWithData["yt_last_video"] = $this->yt_last_video;
            }
            
            if (isset($this->yt_last_update)) {
                $aWithData["yt_last_update"] = $this->yt_last_update;
            }
            
            if (isset($this->yt_email_verified)) {
                $aWithData["yt_email_verified"] = $this->yt_email_verified;
            }
            
            if (isset($this->yt_last_visit)) {
                $aWithData["yt_last_visit"] = $this->yt_last_visit;
            }
            
            if (isset($this->yt_last_ip)) {
                $aWithData["yt_last_ip"] = $this->yt_last_ip;
            }
            
            if (isset($this->yt_logo_icon)) {
                $aWithData["yt_logo_icon"] = $this->yt_logo_icon;
            }
            
            if (isset($this->yt_logo_icon_medium)) {
                $aWithData["yt_logo_icon_medium"] = $this->yt_logo_icon_medium;
            }
            
            if (isset($this->yt_custom_sub_msg)) {
                $aWithData["yt_custom_sub_msg"] = $this->yt_custom_sub_msg;
            }
            
            if (isset($this->yt_custom_sub_msg_register)) {
                $aWithData["yt_custom_sub_msg_register"] = $this->yt_custom_sub_msg_register;
            }
            
        }
        if ($aWhereClause == null) {
            $aWhereClause["idsubs_yt_join"] = $this->idsubs_yt_join;
        }
        return $this->db->update(self::TABLE_NAME, $aWithData, $aWhereClause);
    }

    /**
     * Actualiza explicitamente todos los registros con los datos pasados a traves del parametro $aWithData
     * @param array $aWithData son los parametros a actualizar junto con sus valores
     * @return bool TRUE on success, FALSE on failure
     */
    public function updateAll(array $aWithData = []) {
        if (count($aWithData) == 0) {
            
            if (isset($this->sub_idsuscriptores)) {
                $aWithData["sub_idsuscriptores"] = $this->sub_idsuscriptores;
            }
            
            if (isset($this->sub_summoner_id)) {
                $aWithData["sub_summoner_id"] = $this->sub_summoner_id;
            }
            
            if (isset($this->sub_region)) {
                $aWithData["sub_region"] = $this->sub_region;
            }
            
            if (isset($this->sub_summoner_name)) {
                $aWithData["sub_summoner_name"] = $this->sub_summoner_name;
            }
            
            if (isset($this->sub_registration_date)) {
                $aWithData["sub_registration_date"] = $this->sub_registration_date;
            }
            
            if (isset($this->sub_last_update)) {
                $aWithData["sub_last_update"] = $this->sub_last_update;
            }
            
            if (isset($this->sub_tier)) {
                $aWithData["sub_tier"] = $this->sub_tier;
            }
            
            if (isset($this->sub_division)) {
                $aWithData["sub_division"] = $this->sub_division;
            }
            
            if (isset($this->sub_lp)) {
                $aWithData["sub_lp"] = $this->sub_lp;
            }
            
            if (isset($this->sub_mmr)) {
                $aWithData["sub_mmr"] = $this->sub_mmr;
            }
            
            if (isset($this->total_games_registed)) {
                $aWithData["total_games_registed"] = $this->total_games_registed;
            }
            
            if (isset($this->prefered_queue)) {
                $aWithData["prefered_queue"] = $this->prefered_queue;
            }
            
            if (isset($this->yt_idyoutubers)) {
                $aWithData["yt_idyoutubers"] = $this->yt_idyoutubers;
            }
            
            if (isset($this->yt_channel_url)) {
                $aWithData["yt_channel_url"] = $this->yt_channel_url;
            }
            
            if (isset($this->yt_email)) {
                $aWithData["yt_email"] = $this->yt_email;
            }
            
            if (isset($this->yt_registration_date)) {
                $aWithData["yt_registration_date"] = $this->yt_registration_date;
            }
            
            if (isset($this->yt_app_custom_url)) {
                $aWithData["yt_app_custom_url"] = $this->yt_app_custom_url;
            }
            
            if (isset($this->yt_last_video)) {
                $aWithData["yt_last_video"] = $this->yt_last_video;
            }
            
            if (isset($this->yt_last_update)) {
                $aWithData["yt_last_update"] = $this->yt_last_update;
            }
            
            if (isset($this->yt_email_verified)) {
                $aWithData["yt_email_verified"] = $this->yt_email_verified;
            }
            
            if (isset($this->yt_last_visit)) {
                $aWithData["yt_last_visit"] = $this->yt_last_visit;
            }
            
            if (isset($this->yt_last_ip)) {
                $aWithData["yt_last_ip"] = $this->yt_last_ip;
            }
            
            if (isset($this->yt_logo_icon)) {
                $aWithData["yt_logo_icon"] = $this->yt_logo_icon;
            }
            
            if (isset($this->yt_logo_icon_medium)) {
                $aWithData["yt_logo_icon_medium"] = $this->yt_logo_icon_medium;
            }
            
            if (isset($this->yt_custom_sub_msg)) {
                $aWithData["yt_custom_sub_msg"] = $this->yt_custom_sub_msg;
            }
            
            if (isset($this->yt_custom_sub_msg_register)) {
                $aWithData["yt_custom_sub_msg_register"] = $this->yt_custom_sub_msg_register;
            }
            
        }
        return $this->db->update(self::TABLE_NAME, $aWithData);
    }

    ##SENTENCIAS DELETE##

    /**
     * Elimina las filas de la base de datos que cumplan la condicion pasada en $aWhereClause,
     * recuerda que las claves del array deben ser iguales a las columnas en la tabla.
     * @param array $aWhereClause 
     * @return bool TRUE on success, FALSE on failure
     */
    public function delete(array $aWhereClause = null) {
        if ($aWhereClause == null) {
            
            if (isset($this->idsubs_yt_join)) {
                $aWhereClause["idsubs_yt_join"] = $this->idsubs_yt_join;
            }
        
            if (isset($this->sub_idsuscriptores)) {
                $aWhereClause["sub_idsuscriptores"] = $this->sub_idsuscriptores;
            }
        
            if (isset($this->sub_summoner_id)) {
                $aWhereClause["sub_summoner_id"] = $this->sub_summoner_id;
            }
        
            if (isset($this->sub_region)) {
                $aWhereClause["sub_region"] = $this->sub_region;
            }
        
            if (isset($this->sub_summoner_name)) {
                $aWhereClause["sub_summoner_name"] = $this->sub_summoner_name;
            }
        
            if (isset($this->sub_registration_date)) {
                $aWhereClause["sub_registration_date"] = $this->sub_registration_date;
            }
        
            if (isset($this->sub_last_update)) {
                $aWhereClause["sub_last_update"] = $this->sub_last_update;
            }
        
            if (isset($this->sub_tier)) {
                $aWhereClause["sub_tier"] = $this->sub_tier;
            }
        
            if (isset($this->sub_division)) {
                $aWhereClause["sub_division"] = $this->sub_division;
            }
        
            if (isset($this->sub_lp)) {
                $aWhereClause["sub_lp"] = $this->sub_lp;
            }
        
            if (isset($this->sub_mmr)) {
                $aWhereClause["sub_mmr"] = $this->sub_mmr;
            }
        
            if (isset($this->total_games_registed)) {
                $aWhereClause["total_games_registed"] = $this->total_games_registed;
            }
        
            if (isset($this->prefered_queue)) {
                $aWhereClause["prefered_queue"] = $this->prefered_queue;
            }
        
            if (isset($this->yt_idyoutubers)) {
                $aWhereClause["yt_idyoutubers"] = $this->yt_idyoutubers;
            }
        
            if (isset($this->yt_channel_url)) {
                $aWhereClause["yt_channel_url"] = $this->yt_channel_url;
            }
        
            if (isset($this->yt_email)) {
                $aWhereClause["yt_email"] = $this->yt_email;
            }
        
            if (isset($this->yt_registration_date)) {
                $aWhereClause["yt_registration_date"] = $this->yt_registration_date;
            }
        
            if (isset($this->yt_app_custom_url)) {
                $aWhereClause["yt_app_custom_url"] = $this->yt_app_custom_url;
            }
        
            if (isset($this->yt_last_video)) {
                $aWhereClause["yt_last_video"] = $this->yt_last_video;
            }
        
            if (isset($this->yt_last_update)) {
                $aWhereClause["yt_last_update"] = $this->yt_last_update;
            }
        
            if (isset($this->yt_email_verified)) {
                $aWhereClause["yt_email_verified"] = $this->yt_email_verified;
            }
        
            if (isset($this->yt_last_visit)) {
                $aWhereClause["yt_last_visit"] = $this->yt_last_visit;
            }
        
            if (isset($this->yt_last_ip)) {
                $aWhereClause["yt_last_ip"] = $this->yt_last_ip;
            }
        
            if (isset($this->yt_logo_icon)) {
                $aWhereClause["yt_logo_icon"] = $this->yt_logo_icon;
            }
        
            if (isset($this->yt_logo_icon_medium)) {
                $aWhereClause["yt_logo_icon_medium"] = $this->yt_logo_icon_medium;
            }
        
            if (isset($this->yt_custom_sub_msg)) {
                $aWhereClause["yt_custom_sub_msg"] = $this->yt_custom_sub_msg;
            }
        
            if (isset($this->yt_custom_sub_msg_register)) {
                $aWhereClause["yt_custom_sub_msg_register"] = $this->yt_custom_sub_msg_register;
            }
        
        }
        return $this->db->delete(self::TABLE_NAME, $aWhereClause);
    }

    /**
     * Elimina todos los registros de la tabla.<br>
     * delete from table;
     * @return bool TRUE on success, FALSE on failure
     */
    public function deleteAll() {
        return $this->db->delete(self::TABLE_NAME);
    }

}
