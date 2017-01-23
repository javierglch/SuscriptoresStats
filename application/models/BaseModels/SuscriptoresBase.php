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
 * Información sobre la tabla suscriptores
 * - Versión: 10
 * - Fecha de creación: 2017-01-23 17:19:38
 * - Última modificación: 
 * - Comentario <
 * - Numero de columnas: 12
 * 
 * @author Javier
 */
class SuscriptoresBase extends CI_Model {

    /**
     * Nombre de la tabla a la que hace referencia el modelo.
     */
    const TABLE_NAME = 'suscriptores';

    ### ----------------------------------------------------------------------
    ### Listado de constantes para alojar el nombre de las columnas de la tabla 
    ### -----------------------------------------------------------------------
    
    /**  */ 
    const COLUMN_IDSUSCRIPTORES="idsuscriptores";
    
    /** id del invocador */ 
    const COLUMN_SUMMONER_ID="summoner_id";
    
    /** region, euw, lan, las */ 
    const COLUMN_REGION="region";
    
    /** nombre del invocador */ 
    const COLUMN_SUMMONER_NAME="summoner_name";
    
    /** unix_timestamp */ 
    const COLUMN_REGISTRATION_DATE="registration_date";
    
    /** unix_timestamp */ 
    const COLUMN_LAST_UPDATE="last_update";
    
    /** tier: oro, bronce, challenger, etc */ 
    const COLUMN_TIER="tier";
    
    /** division I, II, III, IV, V */ 
    const COLUMN_DIVISION="division";
    
    /** league points */ 
    const COLUMN_LP="lp";
    
    /** puntiacion de ranked:
tier = +500
division = +100
lp = +x */ 
    const COLUMN_MMR="mmr";
    
    /**  */ 
    const COLUMN_PREFERED_QUEUE="prefered_queue";
    
    /**  */ 
    const COLUMN_TOTAL_GAMES_REGISTED="total_games_registed";
       
    
    
    ### -----------------------
    ### Listado de variables 
    ### ----------------------
    
    /**  @var int(11) */ 
    private $idsuscriptores;
    
    /** id del invocador @var int(11) */ 
    private $summoner_id;
    
    /** region, euw, lan, las @var varchar(45) */ 
    private $region;
    
    /** nombre del invocador @var varchar(45) */ 
    private $summoner_name;
    
    /** unix_timestamp @var int(11) */ 
    private $registration_date;
    
    /** unix_timestamp @var int(11) */ 
    private $last_update;
    
    /** tier: oro, bronce, challenger, etc @var varchar(45) */ 
    private $tier;
    
    /** division I, II, III, IV, V @var varchar(45) */ 
    private $division;
    
    /** league points @var int(11) */ 
    private $lp;
    
    /** puntiacion de ranked:
tier = +500
division = +100
lp = +x @var int(11) */ 
    private $mmr;
    
    /**  @var varchar(45) */ 
    private $prefered_queue;
    
    /**  @var int(11) */ 
    private $total_games_registed;
        

    ### -----------------------

    
    
    ### -----------------------
    ### CONSTRUCTOR
    ### ----------------------

    /**
     * Constructor
     * @param $idsuscriptores int(11) 
     * @param $summoner_id int(11) id del invocador
     * @param $region varchar(45) region, euw, lan, las
     * @param $summoner_name varchar(45) nombre del invocador
     * @param $registration_date int(11) unix_timestamp
     * @param $last_update int(11) unix_timestamp
     * @param $tier varchar(45) tier: oro, bronce, challenger, etc
     * @param $division varchar(45) division I, II, III, IV, V
     * @param $lp int(11) league points
     * @param $mmr int(11) puntiacion de ranked:
tier = +500
division = +100
lp = +x
     * @param $prefered_queue varchar(45) 
     * @param $total_games_registed int(11) 
     * 
     */
    function __construct($idsuscriptores=null,$summoner_id=null,$region=null,$summoner_name=null,$registration_date=null,$last_update=null,$tier=null,$division=null,$lp=null,$mmr=null,$prefered_queue=null,$total_games_registed=null) {
        $this->idsuscriptores = $idsuscriptores;
        $this->summoner_id = $summoner_id;
        $this->region = $region;
        $this->summoner_name = $summoner_name;
        $this->registration_date = $registration_date;
        $this->last_update = $last_update;
        $this->tier = $tier;
        $this->division = $division;
        $this->lp = $lp;
        $this->mmr = $mmr;
        $this->prefered_queue = $prefered_queue;
        $this->total_games_registed = $total_games_registed;
        
    }

    ### -----------------------

    
    
    ### -----------------------
    ### GETTERS Y SETTERS Y TOSTRING
    ### ----------------------

    
    
    /**
     * Devuelve la variable idsuscriptores<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getIdsuscriptores(){
        return $this->idsuscriptores;
    }
    /**
     * Devuelve la variable summoner_id<br>
     * Descripcion de la variable: id del invocador
     * @return int(11)
     */
    public function getSummoner_id(){
        return $this->summoner_id;
    }
    /**
     * Devuelve la variable region<br>
     * Descripcion de la variable: region, euw, lan, las
     * @return varchar(45)
     */
    public function getRegion(){
        return $this->region;
    }
    /**
     * Devuelve la variable summoner_name<br>
     * Descripcion de la variable: nombre del invocador
     * @return varchar(45)
     */
    public function getSummoner_name(){
        return $this->summoner_name;
    }
    /**
     * Devuelve la variable registration_date<br>
     * Descripcion de la variable: unix_timestamp
     * @return int(11)
     */
    public function getRegistration_date(){
        return $this->registration_date;
    }
    /**
     * Devuelve la variable last_update<br>
     * Descripcion de la variable: unix_timestamp
     * @return int(11)
     */
    public function getLast_update(){
        return $this->last_update;
    }
    /**
     * Devuelve la variable tier<br>
     * Descripcion de la variable: tier: oro, bronce, challenger, etc
     * @return varchar(45)
     */
    public function getTier(){
        return $this->tier;
    }
    /**
     * Devuelve la variable division<br>
     * Descripcion de la variable: division I, II, III, IV, V
     * @return varchar(45)
     */
    public function getDivision(){
        return $this->division;
    }
    /**
     * Devuelve la variable lp<br>
     * Descripcion de la variable: league points
     * @return int(11)
     */
    public function getLp(){
        return $this->lp;
    }
    /**
     * Devuelve la variable mmr<br>
     * Descripcion de la variable: puntiacion de ranked:
tier = +500
division = +100
lp = +x
     * @return int(11)
     */
    public function getMmr(){
        return $this->mmr;
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
     * Devuelve la variable total_games_registed<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getTotal_games_registed(){
        return $this->total_games_registed;
    }

    
    /**
     * Pone el valor a la variable idsuscriptores<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setIdsuscriptores($value){
        $this->idsuscriptores=$value;
    }
    /**
     * Pone el valor a la variable summoner_id<br>
     * Descripcion de la variable: id del invocador
     * @param int(11) $value
     */
    public function setSummoner_id($value){
        $this->summoner_id=$value;
    }
    /**
     * Pone el valor a la variable region<br>
     * Descripcion de la variable: region, euw, lan, las
     * @param varchar(45) $value
     */
    public function setRegion($value){
        $this->region=$value;
    }
    /**
     * Pone el valor a la variable summoner_name<br>
     * Descripcion de la variable: nombre del invocador
     * @param varchar(45) $value
     */
    public function setSummoner_name($value){
        $this->summoner_name=$value;
    }
    /**
     * Pone el valor a la variable registration_date<br>
     * Descripcion de la variable: unix_timestamp
     * @param int(11) $value
     */
    public function setRegistration_date($value){
        $this->registration_date=$value;
    }
    /**
     * Pone el valor a la variable last_update<br>
     * Descripcion de la variable: unix_timestamp
     * @param int(11) $value
     */
    public function setLast_update($value){
        $this->last_update=$value;
    }
    /**
     * Pone el valor a la variable tier<br>
     * Descripcion de la variable: tier: oro, bronce, challenger, etc
     * @param varchar(45) $value
     */
    public function setTier($value){
        $this->tier=$value;
    }
    /**
     * Pone el valor a la variable division<br>
     * Descripcion de la variable: division I, II, III, IV, V
     * @param varchar(45) $value
     */
    public function setDivision($value){
        $this->division=$value;
    }
    /**
     * Pone el valor a la variable lp<br>
     * Descripcion de la variable: league points
     * @param int(11) $value
     */
    public function setLp($value){
        $this->lp=$value;
    }
    /**
     * Pone el valor a la variable mmr<br>
     * Descripcion de la variable: puntiacion de ranked:
tier = +500
division = +100
lp = +x
     * @param int(11) $value
     */
    public function setMmr($value){
        $this->mmr=$value;
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
     * Pone el valor a la variable total_games_registed<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setTotal_games_registed($value){
        $this->total_games_registed=$value;
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
     * @return Suscriptores
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
     * @return Suscriptores
     */
    public function findOne() {
        $aWhereClause=[];
        
            if (isset($this->idsuscriptores)) {
                $aWhereClause["idsuscriptores"] = $this->idsuscriptores;
            }
        
            if (isset($this->summoner_id)) {
                $aWhereClause["summoner_id"] = $this->summoner_id;
            }
        
            if (isset($this->region)) {
                $aWhereClause["region"] = $this->region;
            }
        
            if (isset($this->summoner_name)) {
                $aWhereClause["summoner_name"] = $this->summoner_name;
            }
        
            if (isset($this->registration_date)) {
                $aWhereClause["registration_date"] = $this->registration_date;
            }
        
            if (isset($this->last_update)) {
                $aWhereClause["last_update"] = $this->last_update;
            }
        
            if (isset($this->tier)) {
                $aWhereClause["tier"] = $this->tier;
            }
        
            if (isset($this->division)) {
                $aWhereClause["division"] = $this->division;
            }
        
            if (isset($this->lp)) {
                $aWhereClause["lp"] = $this->lp;
            }
        
            if (isset($this->mmr)) {
                $aWhereClause["mmr"] = $this->mmr;
            }
        
            if (isset($this->prefered_queue)) {
                $aWhereClause["prefered_queue"] = $this->prefered_queue;
            }
        
            if (isset($this->total_games_registed)) {
                $aWhereClause["total_games_registed"] = $this->total_games_registed;
            }
        
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }
    
    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param array $aWhereClause array asociativo para la clausula where, por ejemplo, si
     * escribimos ["id"=>5], se traduce en el select al estilo: select * from table where id=5 limit 1.
     * @return Suscriptores
     */
    public function findOneBy(array $aWhereClause) {
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }

    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param int $id id de la fila que queremos recuperar (en caso de ser diferente
     * al paremetro que se almacena en el objeto de la clase con la variable idsuscriptores
     * @return Suscriptores
     */
    public function findOneById($id = null) {
        return $this->findOneBy(["idsuscriptores" => ($id != null) ? $id : $this->idsuscriptores]);
    }

   
    /**
     * Recupera la todas las filas teniendo en cuenta los valores dados
     * a las variables y creando automaticamente la clausula where.
     * @return Suscriptores
     */
    public function find() {
        $aWhereClause=[];
        
            if (isset($this->idsuscriptores)) {
                $aWhereClause["idsuscriptores"] = $this->idsuscriptores;
            }
        
            if (isset($this->summoner_id)) {
                $aWhereClause["summoner_id"] = $this->summoner_id;
            }
        
            if (isset($this->region)) {
                $aWhereClause["region"] = $this->region;
            }
        
            if (isset($this->summoner_name)) {
                $aWhereClause["summoner_name"] = $this->summoner_name;
            }
        
            if (isset($this->registration_date)) {
                $aWhereClause["registration_date"] = $this->registration_date;
            }
        
            if (isset($this->last_update)) {
                $aWhereClause["last_update"] = $this->last_update;
            }
        
            if (isset($this->tier)) {
                $aWhereClause["tier"] = $this->tier;
            }
        
            if (isset($this->division)) {
                $aWhereClause["division"] = $this->division;
            }
        
            if (isset($this->lp)) {
                $aWhereClause["lp"] = $this->lp;
            }
        
            if (isset($this->mmr)) {
                $aWhereClause["mmr"] = $this->mmr;
            }
        
            if (isset($this->prefered_queue)) {
                $aWhereClause["prefered_queue"] = $this->prefered_queue;
            }
        
            if (isset($this->total_games_registed)) {
                $aWhereClause["total_games_registed"] = $this->total_games_registed;
            }
        
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new Suscriptores();
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
     * @return Suscriptores array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function findBy(array $aWhereClause) {
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new Suscriptores();
            $o->constructFromArray($aRow);
            array_push($aResults, $o);
        }
        return $aResults;
    }

    
    /**
     * Recupera todos los registros de la tabla
     * @return Suscriptores array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function selectAll() {
        $aRows = $this->db->select('*')->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new Suscriptores();
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
            
            if (isset($this->idsuscriptores)) {
                $aData["idsuscriptores"] = $this->idsuscriptores;
            }
        
            if (isset($this->summoner_id)) {
                $aData["summoner_id"] = $this->summoner_id;
            }
        
            if (isset($this->region)) {
                $aData["region"] = $this->region;
            }
        
            if (isset($this->summoner_name)) {
                $aData["summoner_name"] = $this->summoner_name;
            }
        
            if (isset($this->registration_date)) {
                $aData["registration_date"] = $this->registration_date;
            }
        
            if (isset($this->last_update)) {
                $aData["last_update"] = $this->last_update;
            }
        
            if (isset($this->tier)) {
                $aData["tier"] = $this->tier;
            }
        
            if (isset($this->division)) {
                $aData["division"] = $this->division;
            }
        
            if (isset($this->lp)) {
                $aData["lp"] = $this->lp;
            }
        
            if (isset($this->mmr)) {
                $aData["mmr"] = $this->mmr;
            }
        
            if (isset($this->prefered_queue)) {
                $aData["prefered_queue"] = $this->prefered_queue;
            }
        
            if (isset($this->total_games_registed)) {
                $aData["total_games_registed"] = $this->total_games_registed;
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
            
            if (isset($this->idsuscriptores)) {
                $aData["idsuscriptores"] = $this->idsuscriptores;
            }
        
            if (isset($this->summoner_id)) {
                $aData["summoner_id"] = $this->summoner_id;
            }
        
            if (isset($this->region)) {
                $aData["region"] = $this->region;
            }
        
            if (isset($this->summoner_name)) {
                $aData["summoner_name"] = $this->summoner_name;
            }
        
            if (isset($this->registration_date)) {
                $aData["registration_date"] = $this->registration_date;
            }
        
            if (isset($this->last_update)) {
                $aData["last_update"] = $this->last_update;
            }
        
            if (isset($this->tier)) {
                $aData["tier"] = $this->tier;
            }
        
            if (isset($this->division)) {
                $aData["division"] = $this->division;
            }
        
            if (isset($this->lp)) {
                $aData["lp"] = $this->lp;
            }
        
            if (isset($this->mmr)) {
                $aData["mmr"] = $this->mmr;
            }
        
            if (isset($this->prefered_queue)) {
                $aData["prefered_queue"] = $this->prefered_queue;
            }
        
            if (isset($this->total_games_registed)) {
                $aData["total_games_registed"] = $this->total_games_registed;
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
            
            if (isset($this->summoner_id)) {
                $aWithData["summoner_id"] = $this->summoner_id;
            }
            
            if (isset($this->region)) {
                $aWithData["region"] = $this->region;
            }
            
            if (isset($this->summoner_name)) {
                $aWithData["summoner_name"] = $this->summoner_name;
            }
            
            if (isset($this->registration_date)) {
                $aWithData["registration_date"] = $this->registration_date;
            }
            
            if (isset($this->last_update)) {
                $aWithData["last_update"] = $this->last_update;
            }
            
            if (isset($this->tier)) {
                $aWithData["tier"] = $this->tier;
            }
            
            if (isset($this->division)) {
                $aWithData["division"] = $this->division;
            }
            
            if (isset($this->lp)) {
                $aWithData["lp"] = $this->lp;
            }
            
            if (isset($this->mmr)) {
                $aWithData["mmr"] = $this->mmr;
            }
            
            if (isset($this->prefered_queue)) {
                $aWithData["prefered_queue"] = $this->prefered_queue;
            }
            
            if (isset($this->total_games_registed)) {
                $aWithData["total_games_registed"] = $this->total_games_registed;
            }
            
        }
        if ($aWhereClause == null) {
            $aWhereClause["idsuscriptores"] = $this->idsuscriptores;
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
            
            if (isset($this->summoner_id)) {
                $aWithData["summoner_id"] = $this->summoner_id;
            }
            
            if (isset($this->region)) {
                $aWithData["region"] = $this->region;
            }
            
            if (isset($this->summoner_name)) {
                $aWithData["summoner_name"] = $this->summoner_name;
            }
            
            if (isset($this->registration_date)) {
                $aWithData["registration_date"] = $this->registration_date;
            }
            
            if (isset($this->last_update)) {
                $aWithData["last_update"] = $this->last_update;
            }
            
            if (isset($this->tier)) {
                $aWithData["tier"] = $this->tier;
            }
            
            if (isset($this->division)) {
                $aWithData["division"] = $this->division;
            }
            
            if (isset($this->lp)) {
                $aWithData["lp"] = $this->lp;
            }
            
            if (isset($this->mmr)) {
                $aWithData["mmr"] = $this->mmr;
            }
            
            if (isset($this->prefered_queue)) {
                $aWithData["prefered_queue"] = $this->prefered_queue;
            }
            
            if (isset($this->total_games_registed)) {
                $aWithData["total_games_registed"] = $this->total_games_registed;
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
            
            if (isset($this->idsuscriptores)) {
                $aWhereClause["idsuscriptores"] = $this->idsuscriptores;
            }
        
            if (isset($this->summoner_id)) {
                $aWhereClause["summoner_id"] = $this->summoner_id;
            }
        
            if (isset($this->region)) {
                $aWhereClause["region"] = $this->region;
            }
        
            if (isset($this->summoner_name)) {
                $aWhereClause["summoner_name"] = $this->summoner_name;
            }
        
            if (isset($this->registration_date)) {
                $aWhereClause["registration_date"] = $this->registration_date;
            }
        
            if (isset($this->last_update)) {
                $aWhereClause["last_update"] = $this->last_update;
            }
        
            if (isset($this->tier)) {
                $aWhereClause["tier"] = $this->tier;
            }
        
            if (isset($this->division)) {
                $aWhereClause["division"] = $this->division;
            }
        
            if (isset($this->lp)) {
                $aWhereClause["lp"] = $this->lp;
            }
        
            if (isset($this->mmr)) {
                $aWhereClause["mmr"] = $this->mmr;
            }
        
            if (isset($this->prefered_queue)) {
                $aWhereClause["prefered_queue"] = $this->prefered_queue;
            }
        
            if (isset($this->total_games_registed)) {
                $aWhereClause["total_games_registed"] = $this->total_games_registed;
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
