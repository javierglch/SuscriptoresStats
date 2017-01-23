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
 * Información sobre la tabla subs_yt_games_stats
 * - Versión: 
 * - Fecha de creación: 
 * - Última modificación: 
 * - Comentario VIEW<
 * - Numero de columnas: 12
 * 
 * @author Javier
 */
class SubsYtGamesStatsBase extends CI_Model {

    /**
     * Nombre de la tabla a la que hace referencia el modelo.
     */
    const TABLE_NAME = 'subs_yt_games_stats';

    ### ----------------------------------------------------------------------
    ### Listado de constantes para alojar el nombre de las columnas de la tabla 
    ### -----------------------------------------------------------------------
    
    /**  */ 
    const COLUMN_IDSUBS_YT_GAMES_STATS="idsubs_yt_games_stats";
    
    /**  */ 
    const COLUMN_IDSUSCRIPTOR="idsuscriptor";
    
    /**  */ 
    const COLUMN_IDYOUTUBER="idyoutuber";
    
    /**  */ 
    const COLUMN_SUMMONER_ID="summoner_id";
    
    /**  */ 
    const COLUMN_REGION="region";
    
    /**  */ 
    const COLUMN_GAME_ID="game_id";
    
    /**  */ 
    const COLUMN_CHAMPION="champion";
    
    /**  */ 
    const COLUMN_QUEUE="queue";
    
    /**  */ 
    const COLUMN_SEASON="season";
    
    /**  */ 
    const COLUMN_CREATED_DATE="created_date";
    
    /**  */ 
    const COLUMN_LANE="lane";
    
    /**  */ 
    const COLUMN_ROLE="role";
       
    
    
    ### -----------------------
    ### Listado de variables 
    ### ----------------------
    
    /**  @var binary(0) */ 
    private $idsubs_yt_games_stats;
    
    /**  @var int(11) */ 
    private $idsuscriptor;
    
    /**  @var int(11) */ 
    private $idyoutuber;
    
    /**  @var int(11) */ 
    private $summoner_id;
    
    /**  @var varchar(45) */ 
    private $region;
    
    /**  @var double */ 
    private $game_id;
    
    /**  @var int(11) */ 
    private $champion;
    
    /**  @var varchar(45) */ 
    private $queue;
    
    /**  @var varchar(25) */ 
    private $season;
    
    /**  @var double */ 
    private $created_date;
    
    /**  @var varchar(10) */ 
    private $lane;
    
    /**  @var varchar(10) */ 
    private $role;
        

    ### -----------------------

    
    
    ### -----------------------
    ### CONSTRUCTOR
    ### ----------------------

    /**
     * Constructor
     * @param $idsubs_yt_games_stats binary(0) 
     * @param $idsuscriptor int(11) 
     * @param $idyoutuber int(11) 
     * @param $summoner_id int(11) 
     * @param $region varchar(45) 
     * @param $game_id double 
     * @param $champion int(11) 
     * @param $queue varchar(45) 
     * @param $season varchar(25) 
     * @param $created_date double 
     * @param $lane varchar(10) 
     * @param $role varchar(10) 
     * 
     */
    function __construct($idsubs_yt_games_stats=null,$idsuscriptor=null,$idyoutuber=null,$summoner_id=null,$region=null,$game_id=null,$champion=null,$queue=null,$season=null,$created_date=null,$lane=null,$role=null) {
        $this->idsubs_yt_games_stats = $idsubs_yt_games_stats;
        $this->idsuscriptor = $idsuscriptor;
        $this->idyoutuber = $idyoutuber;
        $this->summoner_id = $summoner_id;
        $this->region = $region;
        $this->game_id = $game_id;
        $this->champion = $champion;
        $this->queue = $queue;
        $this->season = $season;
        $this->created_date = $created_date;
        $this->lane = $lane;
        $this->role = $role;
        
    }

    ### -----------------------

    
    
    ### -----------------------
    ### GETTERS Y SETTERS Y TOSTRING
    ### ----------------------

    
    
    /**
     * Devuelve la variable idsubs_yt_games_stats<br>
     * Descripcion de la variable: 
     * @return binary(0)
     */
    public function getIdsubs_yt_games_stats(){
        return $this->idsubs_yt_games_stats;
    }
    /**
     * Devuelve la variable idsuscriptor<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getIdsuscriptor(){
        return $this->idsuscriptor;
    }
    /**
     * Devuelve la variable idyoutuber<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getIdyoutuber(){
        return $this->idyoutuber;
    }
    /**
     * Devuelve la variable summoner_id<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getSummoner_id(){
        return $this->summoner_id;
    }
    /**
     * Devuelve la variable region<br>
     * Descripcion de la variable: 
     * @return varchar(45)
     */
    public function getRegion(){
        return $this->region;
    }
    /**
     * Devuelve la variable game_id<br>
     * Descripcion de la variable: 
     * @return double
     */
    public function getGame_id(){
        return $this->game_id;
    }
    /**
     * Devuelve la variable champion<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getChampion(){
        return $this->champion;
    }
    /**
     * Devuelve la variable queue<br>
     * Descripcion de la variable: 
     * @return varchar(45)
     */
    public function getQueue(){
        return $this->queue;
    }
    /**
     * Devuelve la variable season<br>
     * Descripcion de la variable: 
     * @return varchar(25)
     */
    public function getSeason(){
        return $this->season;
    }
    /**
     * Devuelve la variable created_date<br>
     * Descripcion de la variable: 
     * @return double
     */
    public function getCreated_date(){
        return $this->created_date;
    }
    /**
     * Devuelve la variable lane<br>
     * Descripcion de la variable: 
     * @return varchar(10)
     */
    public function getLane(){
        return $this->lane;
    }
    /**
     * Devuelve la variable role<br>
     * Descripcion de la variable: 
     * @return varchar(10)
     */
    public function getRole(){
        return $this->role;
    }

    
    /**
     * Pone el valor a la variable idsubs_yt_games_stats<br>
     * Descripcion de la variable: 
     * @param binary(0) $value
     */
    public function setIdsubs_yt_games_stats($value){
        $this->idsubs_yt_games_stats=$value;
    }
    /**
     * Pone el valor a la variable idsuscriptor<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setIdsuscriptor($value){
        $this->idsuscriptor=$value;
    }
    /**
     * Pone el valor a la variable idyoutuber<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setIdyoutuber($value){
        $this->idyoutuber=$value;
    }
    /**
     * Pone el valor a la variable summoner_id<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setSummoner_id($value){
        $this->summoner_id=$value;
    }
    /**
     * Pone el valor a la variable region<br>
     * Descripcion de la variable: 
     * @param varchar(45) $value
     */
    public function setRegion($value){
        $this->region=$value;
    }
    /**
     * Pone el valor a la variable game_id<br>
     * Descripcion de la variable: 
     * @param double $value
     */
    public function setGame_id($value){
        $this->game_id=$value;
    }
    /**
     * Pone el valor a la variable champion<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setChampion($value){
        $this->champion=$value;
    }
    /**
     * Pone el valor a la variable queue<br>
     * Descripcion de la variable: 
     * @param varchar(45) $value
     */
    public function setQueue($value){
        $this->queue=$value;
    }
    /**
     * Pone el valor a la variable season<br>
     * Descripcion de la variable: 
     * @param varchar(25) $value
     */
    public function setSeason($value){
        $this->season=$value;
    }
    /**
     * Pone el valor a la variable created_date<br>
     * Descripcion de la variable: 
     * @param double $value
     */
    public function setCreated_date($value){
        $this->created_date=$value;
    }
    /**
     * Pone el valor a la variable lane<br>
     * Descripcion de la variable: 
     * @param varchar(10) $value
     */
    public function setLane($value){
        $this->lane=$value;
    }
    /**
     * Pone el valor a la variable role<br>
     * Descripcion de la variable: 
     * @param varchar(10) $value
     */
    public function setRole($value){
        $this->role=$value;
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
     * @return SubsYtGamesStats
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
     * @return SubsYtGamesStats
     */
    public function findOne() {
        $aWhereClause=[];
        
            if (isset($this->idsubs_yt_games_stats)) {
                $aWhereClause["idsubs_yt_games_stats"] = $this->idsubs_yt_games_stats;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->idyoutuber)) {
                $aWhereClause["idyoutuber"] = $this->idyoutuber;
            }
        
            if (isset($this->summoner_id)) {
                $aWhereClause["summoner_id"] = $this->summoner_id;
            }
        
            if (isset($this->region)) {
                $aWhereClause["region"] = $this->region;
            }
        
            if (isset($this->game_id)) {
                $aWhereClause["game_id"] = $this->game_id;
            }
        
            if (isset($this->champion)) {
                $aWhereClause["champion"] = $this->champion;
            }
        
            if (isset($this->queue)) {
                $aWhereClause["queue"] = $this->queue;
            }
        
            if (isset($this->season)) {
                $aWhereClause["season"] = $this->season;
            }
        
            if (isset($this->created_date)) {
                $aWhereClause["created_date"] = $this->created_date;
            }
        
            if (isset($this->lane)) {
                $aWhereClause["lane"] = $this->lane;
            }
        
            if (isset($this->role)) {
                $aWhereClause["role"] = $this->role;
            }
        
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }
    
    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param array $aWhereClause array asociativo para la clausula where, por ejemplo, si
     * escribimos ["id"=>5], se traduce en el select al estilo: select * from table where id=5 limit 1.
     * @return SubsYtGamesStats
     */
    public function findOneBy(array $aWhereClause) {
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }

    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param int $id id de la fila que queremos recuperar (en caso de ser diferente
     * al paremetro que se almacena en el objeto de la clase con la variable idsubs_yt_games_stats
     * @return SubsYtGamesStats
     */
    public function findOneById($id = null) {
        return $this->findOneBy(["idsubs_yt_games_stats" => ($id != null) ? $id : $this->idsubs_yt_games_stats]);
    }

   
    /**
     * Recupera la todas las filas teniendo en cuenta los valores dados
     * a las variables y creando automaticamente la clausula where.
     * @return SubsYtGamesStats
     */
    public function find() {
        $aWhereClause=[];
        
            if (isset($this->idsubs_yt_games_stats)) {
                $aWhereClause["idsubs_yt_games_stats"] = $this->idsubs_yt_games_stats;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->idyoutuber)) {
                $aWhereClause["idyoutuber"] = $this->idyoutuber;
            }
        
            if (isset($this->summoner_id)) {
                $aWhereClause["summoner_id"] = $this->summoner_id;
            }
        
            if (isset($this->region)) {
                $aWhereClause["region"] = $this->region;
            }
        
            if (isset($this->game_id)) {
                $aWhereClause["game_id"] = $this->game_id;
            }
        
            if (isset($this->champion)) {
                $aWhereClause["champion"] = $this->champion;
            }
        
            if (isset($this->queue)) {
                $aWhereClause["queue"] = $this->queue;
            }
        
            if (isset($this->season)) {
                $aWhereClause["season"] = $this->season;
            }
        
            if (isset($this->created_date)) {
                $aWhereClause["created_date"] = $this->created_date;
            }
        
            if (isset($this->lane)) {
                $aWhereClause["lane"] = $this->lane;
            }
        
            if (isset($this->role)) {
                $aWhereClause["role"] = $this->role;
            }
        
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SubsYtGamesStats();
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
     * @return SubsYtGamesStats array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function findBy(array $aWhereClause) {
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SubsYtGamesStats();
            $o->constructFromArray($aRow);
            array_push($aResults, $o);
        }
        return $aResults;
    }

    
    /**
     * Recupera todos los registros de la tabla
     * @return SubsYtGamesStats array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function selectAll() {
        $aRows = $this->db->select('*')->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SubsYtGamesStats();
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
            
            if (isset($this->idsubs_yt_games_stats)) {
                $aData["idsubs_yt_games_stats"] = $this->idsubs_yt_games_stats;
            }
        
            if (isset($this->idsuscriptor)) {
                $aData["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->idyoutuber)) {
                $aData["idyoutuber"] = $this->idyoutuber;
            }
        
            if (isset($this->summoner_id)) {
                $aData["summoner_id"] = $this->summoner_id;
            }
        
            if (isset($this->region)) {
                $aData["region"] = $this->region;
            }
        
            if (isset($this->game_id)) {
                $aData["game_id"] = $this->game_id;
            }
        
            if (isset($this->champion)) {
                $aData["champion"] = $this->champion;
            }
        
            if (isset($this->queue)) {
                $aData["queue"] = $this->queue;
            }
        
            if (isset($this->season)) {
                $aData["season"] = $this->season;
            }
        
            if (isset($this->created_date)) {
                $aData["created_date"] = $this->created_date;
            }
        
            if (isset($this->lane)) {
                $aData["lane"] = $this->lane;
            }
        
            if (isset($this->role)) {
                $aData["role"] = $this->role;
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
            
            if (isset($this->idsubs_yt_games_stats)) {
                $aData["idsubs_yt_games_stats"] = $this->idsubs_yt_games_stats;
            }
        
            if (isset($this->idsuscriptor)) {
                $aData["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->idyoutuber)) {
                $aData["idyoutuber"] = $this->idyoutuber;
            }
        
            if (isset($this->summoner_id)) {
                $aData["summoner_id"] = $this->summoner_id;
            }
        
            if (isset($this->region)) {
                $aData["region"] = $this->region;
            }
        
            if (isset($this->game_id)) {
                $aData["game_id"] = $this->game_id;
            }
        
            if (isset($this->champion)) {
                $aData["champion"] = $this->champion;
            }
        
            if (isset($this->queue)) {
                $aData["queue"] = $this->queue;
            }
        
            if (isset($this->season)) {
                $aData["season"] = $this->season;
            }
        
            if (isset($this->created_date)) {
                $aData["created_date"] = $this->created_date;
            }
        
            if (isset($this->lane)) {
                $aData["lane"] = $this->lane;
            }
        
            if (isset($this->role)) {
                $aData["role"] = $this->role;
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
            
            if (isset($this->idsuscriptor)) {
                $aWithData["idsuscriptor"] = $this->idsuscriptor;
            }
            
            if (isset($this->idyoutuber)) {
                $aWithData["idyoutuber"] = $this->idyoutuber;
            }
            
            if (isset($this->summoner_id)) {
                $aWithData["summoner_id"] = $this->summoner_id;
            }
            
            if (isset($this->region)) {
                $aWithData["region"] = $this->region;
            }
            
            if (isset($this->game_id)) {
                $aWithData["game_id"] = $this->game_id;
            }
            
            if (isset($this->champion)) {
                $aWithData["champion"] = $this->champion;
            }
            
            if (isset($this->queue)) {
                $aWithData["queue"] = $this->queue;
            }
            
            if (isset($this->season)) {
                $aWithData["season"] = $this->season;
            }
            
            if (isset($this->created_date)) {
                $aWithData["created_date"] = $this->created_date;
            }
            
            if (isset($this->lane)) {
                $aWithData["lane"] = $this->lane;
            }
            
            if (isset($this->role)) {
                $aWithData["role"] = $this->role;
            }
            
        }
        if ($aWhereClause == null) {
            $aWhereClause["idsubs_yt_games_stats"] = $this->idsubs_yt_games_stats;
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
            
            if (isset($this->idsuscriptor)) {
                $aWithData["idsuscriptor"] = $this->idsuscriptor;
            }
            
            if (isset($this->idyoutuber)) {
                $aWithData["idyoutuber"] = $this->idyoutuber;
            }
            
            if (isset($this->summoner_id)) {
                $aWithData["summoner_id"] = $this->summoner_id;
            }
            
            if (isset($this->region)) {
                $aWithData["region"] = $this->region;
            }
            
            if (isset($this->game_id)) {
                $aWithData["game_id"] = $this->game_id;
            }
            
            if (isset($this->champion)) {
                $aWithData["champion"] = $this->champion;
            }
            
            if (isset($this->queue)) {
                $aWithData["queue"] = $this->queue;
            }
            
            if (isset($this->season)) {
                $aWithData["season"] = $this->season;
            }
            
            if (isset($this->created_date)) {
                $aWithData["created_date"] = $this->created_date;
            }
            
            if (isset($this->lane)) {
                $aWithData["lane"] = $this->lane;
            }
            
            if (isset($this->role)) {
                $aWithData["role"] = $this->role;
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
            
            if (isset($this->idsubs_yt_games_stats)) {
                $aWhereClause["idsubs_yt_games_stats"] = $this->idsubs_yt_games_stats;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->idyoutuber)) {
                $aWhereClause["idyoutuber"] = $this->idyoutuber;
            }
        
            if (isset($this->summoner_id)) {
                $aWhereClause["summoner_id"] = $this->summoner_id;
            }
        
            if (isset($this->region)) {
                $aWhereClause["region"] = $this->region;
            }
        
            if (isset($this->game_id)) {
                $aWhereClause["game_id"] = $this->game_id;
            }
        
            if (isset($this->champion)) {
                $aWhereClause["champion"] = $this->champion;
            }
        
            if (isset($this->queue)) {
                $aWhereClause["queue"] = $this->queue;
            }
        
            if (isset($this->season)) {
                $aWhereClause["season"] = $this->season;
            }
        
            if (isset($this->created_date)) {
                $aWhereClause["created_date"] = $this->created_date;
            }
        
            if (isset($this->lane)) {
                $aWhereClause["lane"] = $this->lane;
            }
        
            if (isset($this->role)) {
                $aWhereClause["role"] = $this->role;
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
