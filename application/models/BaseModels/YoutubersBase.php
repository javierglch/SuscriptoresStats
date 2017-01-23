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
 * Información sobre la tabla youtubers
 * - Versión: 10
 * - Fecha de creación: 2017-01-22 13:49:26
 * - Última modificación: 
 * - Comentario <
 * - Numero de columnas: 16
 * 
 * @author Javier
 */
class YoutubersBase extends CI_Model {

    /**
     * Nombre de la tabla a la que hace referencia el modelo.
     */
    const TABLE_NAME = 'youtubers';

    ### ----------------------------------------------------------------------
    ### Listado de constantes para alojar el nombre de las columnas de la tabla 
    ### -----------------------------------------------------------------------
    
    /**  */ 
    const COLUMN_IDYOUTUBERS="idyoutubers";
    
    /**  */ 
    const COLUMN_CHANNEL_URL="channel_url";
    
    /**  */ 
    const COLUMN_PASSWORD="password";
    
    /**  */ 
    const COLUMN_EMAIL="email";
    
    /**  */ 
    const COLUMN_REGISTRATION_DATE="registration_date";
    
    /** URL PARA LA APLICACION */ 
    const COLUMN_APP_CUSTOM_URL="app_custom_url";
    
    /**  */ 
    const COLUMN_LAST_VIDEO="last_video";
    
    /**  */ 
    const COLUMN_LAST_UPDATE="last_update";
    
    /**  */ 
    const COLUMN_EMAIL_VERIFIED="email_verified";
    
    /**  */ 
    const COLUMN_LAST_VISIT="last_visit";
    
    /** TIPO DE CUENTA:
1 = normal
2 = admin */ 
    const COLUMN_LAST_IP="last_ip";
    
    /**  */ 
    const COLUMN_ACC_GROUP="acc_group";
    
    /**  */ 
    const COLUMN_LOGO_ICON="logo_icon";
    
    /**  */ 
    const COLUMN_CUSTOM_SUB_MSG="custom_sub_msg";
    
    /**  */ 
    const COLUMN_LOGO_ICON_MEDIUM="logo_icon_medium";
    
    /** Texto que sale cuando el usuario ha terminado de registrarse */ 
    const COLUMN_CUSTOM_SUB_MSG_REGISTER="custom_sub_msg_register";
       
    
    
    ### -----------------------
    ### Listado de variables 
    ### ----------------------
    
    /**  @var int(11) */ 
    private $idyoutubers;
    
    /**  @var varchar(255) */ 
    private $channel_url;
    
    /**  @var varchar(50) */ 
    private $password;
    
    /**  @var varchar(50) */ 
    private $email;
    
    /**  @var int(11) */ 
    private $registration_date;
    
    /** URL PARA LA APLICACION @var varchar(50) */ 
    private $app_custom_url;
    
    /**  @var varchar(50) */ 
    private $last_video;
    
    /**  @var int(11) */ 
    private $last_update;
    
    /**  @var int(1) */ 
    private $email_verified;
    
    /**  @var int(11) */ 
    private $last_visit;
    
    /** TIPO DE CUENTA:
1 = normal
2 = admin @var varchar(45) */ 
    private $last_ip;
    
    /**  @var int(11) */ 
    private $acc_group;
    
    /**  @var varchar(50) */ 
    private $logo_icon;
    
    /**  @var text */ 
    private $custom_sub_msg;
    
    /**  @var varchar(50) */ 
    private $logo_icon_medium;
    
    /** Texto que sale cuando el usuario ha terminado de registrarse @var text */ 
    private $custom_sub_msg_register;
        

    ### -----------------------

    
    
    ### -----------------------
    ### CONSTRUCTOR
    ### ----------------------

    /**
     * Constructor
     * @param $idyoutubers int(11) 
     * @param $channel_url varchar(255) 
     * @param $password varchar(50) 
     * @param $email varchar(50) 
     * @param $registration_date int(11) 
     * @param $app_custom_url varchar(50) URL PARA LA APLICACION
     * @param $last_video varchar(50) 
     * @param $last_update int(11) 
     * @param $email_verified int(1) 
     * @param $last_visit int(11) 
     * @param $last_ip varchar(45) TIPO DE CUENTA:
1 = normal
2 = admin
     * @param $acc_group int(11) 
     * @param $logo_icon varchar(50) 
     * @param $custom_sub_msg text 
     * @param $logo_icon_medium varchar(50) 
     * @param $custom_sub_msg_register text Texto que sale cuando el usuario ha terminado de registrarse
     * 
     */
    function __construct($idyoutubers=null,$channel_url=null,$password=null,$email=null,$registration_date=null,$app_custom_url=null,$last_video=null,$last_update=null,$email_verified=null,$last_visit=null,$last_ip=null,$acc_group=null,$logo_icon=null,$custom_sub_msg=null,$logo_icon_medium=null,$custom_sub_msg_register=null) {
        $this->idyoutubers = $idyoutubers;
        $this->channel_url = $channel_url;
        $this->password = $password;
        $this->email = $email;
        $this->registration_date = $registration_date;
        $this->app_custom_url = $app_custom_url;
        $this->last_video = $last_video;
        $this->last_update = $last_update;
        $this->email_verified = $email_verified;
        $this->last_visit = $last_visit;
        $this->last_ip = $last_ip;
        $this->acc_group = $acc_group;
        $this->logo_icon = $logo_icon;
        $this->custom_sub_msg = $custom_sub_msg;
        $this->logo_icon_medium = $logo_icon_medium;
        $this->custom_sub_msg_register = $custom_sub_msg_register;
        
    }

    ### -----------------------

    
    
    ### -----------------------
    ### GETTERS Y SETTERS Y TOSTRING
    ### ----------------------

    
    
    /**
     * Devuelve la variable idyoutubers<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getIdyoutubers(){
        return $this->idyoutubers;
    }
    /**
     * Devuelve la variable channel_url<br>
     * Descripcion de la variable: 
     * @return varchar(255)
     */
    public function getChannel_url(){
        return $this->channel_url;
    }
    /**
     * Devuelve la variable password<br>
     * Descripcion de la variable: 
     * @return varchar(50)
     */
    public function getPassword(){
        return $this->password;
    }
    /**
     * Devuelve la variable email<br>
     * Descripcion de la variable: 
     * @return varchar(50)
     */
    public function getEmail(){
        return $this->email;
    }
    /**
     * Devuelve la variable registration_date<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getRegistration_date(){
        return $this->registration_date;
    }
    /**
     * Devuelve la variable app_custom_url<br>
     * Descripcion de la variable: URL PARA LA APLICACION
     * @return varchar(50)
     */
    public function getApp_custom_url(){
        return $this->app_custom_url;
    }
    /**
     * Devuelve la variable last_video<br>
     * Descripcion de la variable: 
     * @return varchar(50)
     */
    public function getLast_video(){
        return $this->last_video;
    }
    /**
     * Devuelve la variable last_update<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getLast_update(){
        return $this->last_update;
    }
    /**
     * Devuelve la variable email_verified<br>
     * Descripcion de la variable: 
     * @return int(1)
     */
    public function getEmail_verified(){
        return $this->email_verified;
    }
    /**
     * Devuelve la variable last_visit<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getLast_visit(){
        return $this->last_visit;
    }
    /**
     * Devuelve la variable last_ip<br>
     * Descripcion de la variable: TIPO DE CUENTA:
1 = normal
2 = admin
     * @return varchar(45)
     */
    public function getLast_ip(){
        return $this->last_ip;
    }
    /**
     * Devuelve la variable acc_group<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getAcc_group(){
        return $this->acc_group;
    }
    /**
     * Devuelve la variable logo_icon<br>
     * Descripcion de la variable: 
     * @return varchar(50)
     */
    public function getLogo_icon(){
        return $this->logo_icon;
    }
    /**
     * Devuelve la variable custom_sub_msg<br>
     * Descripcion de la variable: 
     * @return text
     */
    public function getCustom_sub_msg(){
        return $this->custom_sub_msg;
    }
    /**
     * Devuelve la variable logo_icon_medium<br>
     * Descripcion de la variable: 
     * @return varchar(50)
     */
    public function getLogo_icon_medium(){
        return $this->logo_icon_medium;
    }
    /**
     * Devuelve la variable custom_sub_msg_register<br>
     * Descripcion de la variable: Texto que sale cuando el usuario ha terminado de registrarse
     * @return text
     */
    public function getCustom_sub_msg_register(){
        return $this->custom_sub_msg_register;
    }

    
    /**
     * Pone el valor a la variable idyoutubers<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setIdyoutubers($value){
        $this->idyoutubers=$value;
    }
    /**
     * Pone el valor a la variable channel_url<br>
     * Descripcion de la variable: 
     * @param varchar(255) $value
     */
    public function setChannel_url($value){
        $this->channel_url=$value;
    }
    /**
     * Pone el valor a la variable password<br>
     * Descripcion de la variable: 
     * @param varchar(50) $value
     */
    public function setPassword($value){
        $this->password=$value;
    }
    /**
     * Pone el valor a la variable email<br>
     * Descripcion de la variable: 
     * @param varchar(50) $value
     */
    public function setEmail($value){
        $this->email=$value;
    }
    /**
     * Pone el valor a la variable registration_date<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setRegistration_date($value){
        $this->registration_date=$value;
    }
    /**
     * Pone el valor a la variable app_custom_url<br>
     * Descripcion de la variable: URL PARA LA APLICACION
     * @param varchar(50) $value
     */
    public function setApp_custom_url($value){
        $this->app_custom_url=$value;
    }
    /**
     * Pone el valor a la variable last_video<br>
     * Descripcion de la variable: 
     * @param varchar(50) $value
     */
    public function setLast_video($value){
        $this->last_video=$value;
    }
    /**
     * Pone el valor a la variable last_update<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setLast_update($value){
        $this->last_update=$value;
    }
    /**
     * Pone el valor a la variable email_verified<br>
     * Descripcion de la variable: 
     * @param int(1) $value
     */
    public function setEmail_verified($value){
        $this->email_verified=$value;
    }
    /**
     * Pone el valor a la variable last_visit<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setLast_visit($value){
        $this->last_visit=$value;
    }
    /**
     * Pone el valor a la variable last_ip<br>
     * Descripcion de la variable: TIPO DE CUENTA:
1 = normal
2 = admin
     * @param varchar(45) $value
     */
    public function setLast_ip($value){
        $this->last_ip=$value;
    }
    /**
     * Pone el valor a la variable acc_group<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setAcc_group($value){
        $this->acc_group=$value;
    }
    /**
     * Pone el valor a la variable logo_icon<br>
     * Descripcion de la variable: 
     * @param varchar(50) $value
     */
    public function setLogo_icon($value){
        $this->logo_icon=$value;
    }
    /**
     * Pone el valor a la variable custom_sub_msg<br>
     * Descripcion de la variable: 
     * @param text $value
     */
    public function setCustom_sub_msg($value){
        $this->custom_sub_msg=$value;
    }
    /**
     * Pone el valor a la variable logo_icon_medium<br>
     * Descripcion de la variable: 
     * @param varchar(50) $value
     */
    public function setLogo_icon_medium($value){
        $this->logo_icon_medium=$value;
    }
    /**
     * Pone el valor a la variable custom_sub_msg_register<br>
     * Descripcion de la variable: Texto que sale cuando el usuario ha terminado de registrarse
     * @param text $value
     */
    public function setCustom_sub_msg_register($value){
        $this->custom_sub_msg_register=$value;
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
     * @return Youtubers
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
     * @return Youtubers
     */
    public function findOne() {
        $aWhereClause=[];
        
            if (isset($this->idyoutubers)) {
                $aWhereClause["idyoutubers"] = $this->idyoutubers;
            }
        
            if (isset($this->channel_url)) {
                $aWhereClause["channel_url"] = $this->channel_url;
            }
        
            if (isset($this->password)) {
                $aWhereClause["password"] = $this->password;
            }
        
            if (isset($this->email)) {
                $aWhereClause["email"] = $this->email;
            }
        
            if (isset($this->registration_date)) {
                $aWhereClause["registration_date"] = $this->registration_date;
            }
        
            if (isset($this->app_custom_url)) {
                $aWhereClause["app_custom_url"] = $this->app_custom_url;
            }
        
            if (isset($this->last_video)) {
                $aWhereClause["last_video"] = $this->last_video;
            }
        
            if (isset($this->last_update)) {
                $aWhereClause["last_update"] = $this->last_update;
            }
        
            if (isset($this->email_verified)) {
                $aWhereClause["email_verified"] = $this->email_verified;
            }
        
            if (isset($this->last_visit)) {
                $aWhereClause["last_visit"] = $this->last_visit;
            }
        
            if (isset($this->last_ip)) {
                $aWhereClause["last_ip"] = $this->last_ip;
            }
        
            if (isset($this->acc_group)) {
                $aWhereClause["acc_group"] = $this->acc_group;
            }
        
            if (isset($this->logo_icon)) {
                $aWhereClause["logo_icon"] = $this->logo_icon;
            }
        
            if (isset($this->custom_sub_msg)) {
                $aWhereClause["custom_sub_msg"] = $this->custom_sub_msg;
            }
        
            if (isset($this->logo_icon_medium)) {
                $aWhereClause["logo_icon_medium"] = $this->logo_icon_medium;
            }
        
            if (isset($this->custom_sub_msg_register)) {
                $aWhereClause["custom_sub_msg_register"] = $this->custom_sub_msg_register;
            }
        
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }
    
    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param array $aWhereClause array asociativo para la clausula where, por ejemplo, si
     * escribimos ["id"=>5], se traduce en el select al estilo: select * from table where id=5 limit 1.
     * @return Youtubers
     */
    public function findOneBy(array $aWhereClause) {
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }

    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param int $id id de la fila que queremos recuperar (en caso de ser diferente
     * al paremetro que se almacena en el objeto de la clase con la variable idyoutubers
     * @return Youtubers
     */
    public function findOneById($id = null) {
        return $this->findOneBy(["idyoutubers" => ($id != null) ? $id : $this->idyoutubers]);
    }

   
    /**
     * Recupera la todas las filas teniendo en cuenta los valores dados
     * a las variables y creando automaticamente la clausula where.
     * @return Youtubers
     */
    public function find() {
        $aWhereClause=[];
        
            if (isset($this->idyoutubers)) {
                $aWhereClause["idyoutubers"] = $this->idyoutubers;
            }
        
            if (isset($this->channel_url)) {
                $aWhereClause["channel_url"] = $this->channel_url;
            }
        
            if (isset($this->password)) {
                $aWhereClause["password"] = $this->password;
            }
        
            if (isset($this->email)) {
                $aWhereClause["email"] = $this->email;
            }
        
            if (isset($this->registration_date)) {
                $aWhereClause["registration_date"] = $this->registration_date;
            }
        
            if (isset($this->app_custom_url)) {
                $aWhereClause["app_custom_url"] = $this->app_custom_url;
            }
        
            if (isset($this->last_video)) {
                $aWhereClause["last_video"] = $this->last_video;
            }
        
            if (isset($this->last_update)) {
                $aWhereClause["last_update"] = $this->last_update;
            }
        
            if (isset($this->email_verified)) {
                $aWhereClause["email_verified"] = $this->email_verified;
            }
        
            if (isset($this->last_visit)) {
                $aWhereClause["last_visit"] = $this->last_visit;
            }
        
            if (isset($this->last_ip)) {
                $aWhereClause["last_ip"] = $this->last_ip;
            }
        
            if (isset($this->acc_group)) {
                $aWhereClause["acc_group"] = $this->acc_group;
            }
        
            if (isset($this->logo_icon)) {
                $aWhereClause["logo_icon"] = $this->logo_icon;
            }
        
            if (isset($this->custom_sub_msg)) {
                $aWhereClause["custom_sub_msg"] = $this->custom_sub_msg;
            }
        
            if (isset($this->logo_icon_medium)) {
                $aWhereClause["logo_icon_medium"] = $this->logo_icon_medium;
            }
        
            if (isset($this->custom_sub_msg_register)) {
                $aWhereClause["custom_sub_msg_register"] = $this->custom_sub_msg_register;
            }
        
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new Youtubers();
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
     * @return Youtubers array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function findBy(array $aWhereClause) {
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new Youtubers();
            $o->constructFromArray($aRow);
            array_push($aResults, $o);
        }
        return $aResults;
    }

    
    /**
     * Recupera todos los registros de la tabla
     * @return Youtubers array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function selectAll() {
        $aRows = $this->db->select('*')->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new Youtubers();
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
            
            if (isset($this->idyoutubers)) {
                $aData["idyoutubers"] = $this->idyoutubers;
            }
        
            if (isset($this->channel_url)) {
                $aData["channel_url"] = $this->channel_url;
            }
        
            if (isset($this->password)) {
                $aData["password"] = $this->password;
            }
        
            if (isset($this->email)) {
                $aData["email"] = $this->email;
            }
        
            if (isset($this->registration_date)) {
                $aData["registration_date"] = $this->registration_date;
            }
        
            if (isset($this->app_custom_url)) {
                $aData["app_custom_url"] = $this->app_custom_url;
            }
        
            if (isset($this->last_video)) {
                $aData["last_video"] = $this->last_video;
            }
        
            if (isset($this->last_update)) {
                $aData["last_update"] = $this->last_update;
            }
        
            if (isset($this->email_verified)) {
                $aData["email_verified"] = $this->email_verified;
            }
        
            if (isset($this->last_visit)) {
                $aData["last_visit"] = $this->last_visit;
            }
        
            if (isset($this->last_ip)) {
                $aData["last_ip"] = $this->last_ip;
            }
        
            if (isset($this->acc_group)) {
                $aData["acc_group"] = $this->acc_group;
            }
        
            if (isset($this->logo_icon)) {
                $aData["logo_icon"] = $this->logo_icon;
            }
        
            if (isset($this->custom_sub_msg)) {
                $aData["custom_sub_msg"] = $this->custom_sub_msg;
            }
        
            if (isset($this->logo_icon_medium)) {
                $aData["logo_icon_medium"] = $this->logo_icon_medium;
            }
        
            if (isset($this->custom_sub_msg_register)) {
                $aData["custom_sub_msg_register"] = $this->custom_sub_msg_register;
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
            
            if (isset($this->idyoutubers)) {
                $aData["idyoutubers"] = $this->idyoutubers;
            }
        
            if (isset($this->channel_url)) {
                $aData["channel_url"] = $this->channel_url;
            }
        
            if (isset($this->password)) {
                $aData["password"] = $this->password;
            }
        
            if (isset($this->email)) {
                $aData["email"] = $this->email;
            }
        
            if (isset($this->registration_date)) {
                $aData["registration_date"] = $this->registration_date;
            }
        
            if (isset($this->app_custom_url)) {
                $aData["app_custom_url"] = $this->app_custom_url;
            }
        
            if (isset($this->last_video)) {
                $aData["last_video"] = $this->last_video;
            }
        
            if (isset($this->last_update)) {
                $aData["last_update"] = $this->last_update;
            }
        
            if (isset($this->email_verified)) {
                $aData["email_verified"] = $this->email_verified;
            }
        
            if (isset($this->last_visit)) {
                $aData["last_visit"] = $this->last_visit;
            }
        
            if (isset($this->last_ip)) {
                $aData["last_ip"] = $this->last_ip;
            }
        
            if (isset($this->acc_group)) {
                $aData["acc_group"] = $this->acc_group;
            }
        
            if (isset($this->logo_icon)) {
                $aData["logo_icon"] = $this->logo_icon;
            }
        
            if (isset($this->custom_sub_msg)) {
                $aData["custom_sub_msg"] = $this->custom_sub_msg;
            }
        
            if (isset($this->logo_icon_medium)) {
                $aData["logo_icon_medium"] = $this->logo_icon_medium;
            }
        
            if (isset($this->custom_sub_msg_register)) {
                $aData["custom_sub_msg_register"] = $this->custom_sub_msg_register;
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
            
            if (isset($this->channel_url)) {
                $aWithData["channel_url"] = $this->channel_url;
            }
            
            if (isset($this->password)) {
                $aWithData["password"] = $this->password;
            }
            
            if (isset($this->email)) {
                $aWithData["email"] = $this->email;
            }
            
            if (isset($this->registration_date)) {
                $aWithData["registration_date"] = $this->registration_date;
            }
            
            if (isset($this->app_custom_url)) {
                $aWithData["app_custom_url"] = $this->app_custom_url;
            }
            
            if (isset($this->last_video)) {
                $aWithData["last_video"] = $this->last_video;
            }
            
            if (isset($this->last_update)) {
                $aWithData["last_update"] = $this->last_update;
            }
            
            if (isset($this->email_verified)) {
                $aWithData["email_verified"] = $this->email_verified;
            }
            
            if (isset($this->last_visit)) {
                $aWithData["last_visit"] = $this->last_visit;
            }
            
            if (isset($this->last_ip)) {
                $aWithData["last_ip"] = $this->last_ip;
            }
            
            if (isset($this->acc_group)) {
                $aWithData["acc_group"] = $this->acc_group;
            }
            
            if (isset($this->logo_icon)) {
                $aWithData["logo_icon"] = $this->logo_icon;
            }
            
            if (isset($this->custom_sub_msg)) {
                $aWithData["custom_sub_msg"] = $this->custom_sub_msg;
            }
            
            if (isset($this->logo_icon_medium)) {
                $aWithData["logo_icon_medium"] = $this->logo_icon_medium;
            }
            
            if (isset($this->custom_sub_msg_register)) {
                $aWithData["custom_sub_msg_register"] = $this->custom_sub_msg_register;
            }
            
        }
        if ($aWhereClause == null) {
            $aWhereClause["idyoutubers"] = $this->idyoutubers;
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
            
            if (isset($this->channel_url)) {
                $aWithData["channel_url"] = $this->channel_url;
            }
            
            if (isset($this->password)) {
                $aWithData["password"] = $this->password;
            }
            
            if (isset($this->email)) {
                $aWithData["email"] = $this->email;
            }
            
            if (isset($this->registration_date)) {
                $aWithData["registration_date"] = $this->registration_date;
            }
            
            if (isset($this->app_custom_url)) {
                $aWithData["app_custom_url"] = $this->app_custom_url;
            }
            
            if (isset($this->last_video)) {
                $aWithData["last_video"] = $this->last_video;
            }
            
            if (isset($this->last_update)) {
                $aWithData["last_update"] = $this->last_update;
            }
            
            if (isset($this->email_verified)) {
                $aWithData["email_verified"] = $this->email_verified;
            }
            
            if (isset($this->last_visit)) {
                $aWithData["last_visit"] = $this->last_visit;
            }
            
            if (isset($this->last_ip)) {
                $aWithData["last_ip"] = $this->last_ip;
            }
            
            if (isset($this->acc_group)) {
                $aWithData["acc_group"] = $this->acc_group;
            }
            
            if (isset($this->logo_icon)) {
                $aWithData["logo_icon"] = $this->logo_icon;
            }
            
            if (isset($this->custom_sub_msg)) {
                $aWithData["custom_sub_msg"] = $this->custom_sub_msg;
            }
            
            if (isset($this->logo_icon_medium)) {
                $aWithData["logo_icon_medium"] = $this->logo_icon_medium;
            }
            
            if (isset($this->custom_sub_msg_register)) {
                $aWithData["custom_sub_msg_register"] = $this->custom_sub_msg_register;
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
            
            if (isset($this->idyoutubers)) {
                $aWhereClause["idyoutubers"] = $this->idyoutubers;
            }
        
            if (isset($this->channel_url)) {
                $aWhereClause["channel_url"] = $this->channel_url;
            }
        
            if (isset($this->password)) {
                $aWhereClause["password"] = $this->password;
            }
        
            if (isset($this->email)) {
                $aWhereClause["email"] = $this->email;
            }
        
            if (isset($this->registration_date)) {
                $aWhereClause["registration_date"] = $this->registration_date;
            }
        
            if (isset($this->app_custom_url)) {
                $aWhereClause["app_custom_url"] = $this->app_custom_url;
            }
        
            if (isset($this->last_video)) {
                $aWhereClause["last_video"] = $this->last_video;
            }
        
            if (isset($this->last_update)) {
                $aWhereClause["last_update"] = $this->last_update;
            }
        
            if (isset($this->email_verified)) {
                $aWhereClause["email_verified"] = $this->email_verified;
            }
        
            if (isset($this->last_visit)) {
                $aWhereClause["last_visit"] = $this->last_visit;
            }
        
            if (isset($this->last_ip)) {
                $aWhereClause["last_ip"] = $this->last_ip;
            }
        
            if (isset($this->acc_group)) {
                $aWhereClause["acc_group"] = $this->acc_group;
            }
        
            if (isset($this->logo_icon)) {
                $aWhereClause["logo_icon"] = $this->logo_icon;
            }
        
            if (isset($this->custom_sub_msg)) {
                $aWhereClause["custom_sub_msg"] = $this->custom_sub_msg;
            }
        
            if (isset($this->logo_icon_medium)) {
                $aWhereClause["logo_icon_medium"] = $this->logo_icon_medium;
            }
        
            if (isset($this->custom_sub_msg_register)) {
                $aWhereClause["custom_sub_msg_register"] = $this->custom_sub_msg_register;
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
