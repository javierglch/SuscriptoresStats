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
 * Información sobre la tabla lastest_games
 * - Versión: 10
 * - Fecha de creación: 2017-01-22 17:50:54
 * - Última modificación: 
 * - Comentario <
 * - Numero de columnas: 12
 * 
 * @author Javier
 */
class LastestGamesBase extends CI_Model {

    /**
     * Nombre de la tabla a la que hace referencia el modelo.
     */
    const TABLE_NAME = 'lastest_games';

    ### ----------------------------------------------------------------------
    ### Listado de constantes para alojar el nombre de las columnas de la tabla 
    ### -----------------------------------------------------------------------
    
    /**  */ 
    const COLUMN_IDLASTEST_GAMES="idlastest_games";
    
    /**  */ 
    const COLUMN_GAMEID="gameId";
    
    /**  */ 
    const COLUMN_CHAMPION="champion";
    
    /** EJ: CLASSIC */ 
    const COLUMN_GAMEMODE="gameMode";
    
    /** EJ: MATCHED_GAME */ 
    const COLUMN_GAMETYPE="gameType";
    
    /** EJ: RANKED_SOLO_5x5 */ 
    const COLUMN_SUBTYPE="subType";
    
    /**  */ 
    const COLUMN_SEASON="season";
    
    /**  */ 
    const COLUMN_CREATEDATE="createDate";
    
    /**  */ 
    const COLUMN_KILLS="kills";
    
    /**  */ 
    const COLUMN_DEATHS="deaths";
    
    /**  */ 
    const COLUMN_ASSISTS="assists";
    
    /**  */ 
    const COLUMN_KDA="kda";
       
    
    
    ### -----------------------
    ### Listado de variables 
    ### ----------------------
    
    /**  @var int(11) */ 
    private $idlastest_games;
    
    /**  @var double */ 
    private $gameId;
    
    /**  @var int(11) */ 
    private $champion;
    
    /** EJ: CLASSIC @var varchar(25) */ 
    private $gameMode;
    
    /** EJ: MATCHED_GAME @var varchar(25) */ 
    private $gameType;
    
    /** EJ: RANKED_SOLO_5x5 @var varchar(25) */ 
    private $subType;
    
    /**  @var varchar(15) */ 
    private $season;
    
    /**  @var bigint(15) */ 
    private $createDate;
    
    /**  @var int(11) */ 
    private $kills;
    
    /**  @var int(11) */ 
    private $deaths;
    
    /**  @var int(11) */ 
    private $assists;
    
    /**  @var double */ 
    private $kda;
        

    ### -----------------------

    
    
    ### -----------------------
    ### CONSTRUCTOR
    ### ----------------------

    /**
     * Constructor
     * @param $idlastest_games int(11) 
     * @param $gameId double 
     * @param $champion int(11) 
     * @param $gameMode varchar(25) EJ: CLASSIC
     * @param $gameType varchar(25) EJ: MATCHED_GAME
     * @param $subType varchar(25) EJ: RANKED_SOLO_5x5
     * @param $season varchar(15) 
     * @param $createDate bigint(15) 
     * @param $kills int(11) 
     * @param $deaths int(11) 
     * @param $assists int(11) 
     * @param $kda double 
     * 
     */
    function __construct($idlastest_games=null,$gameId=null,$champion=null,$gameMode=null,$gameType=null,$subType=null,$season=null,$createDate=null,$kills=null,$deaths=null,$assists=null,$kda=null) {
        $this->idlastest_games = $idlastest_games;
        $this->gameId = $gameId;
        $this->champion = $champion;
        $this->gameMode = $gameMode;
        $this->gameType = $gameType;
        $this->subType = $subType;
        $this->season = $season;
        $this->createDate = $createDate;
        $this->kills = $kills;
        $this->deaths = $deaths;
        $this->assists = $assists;
        $this->kda = $kda;
        
    }

    ### -----------------------

    
    
    ### -----------------------
    ### GETTERS Y SETTERS Y TOSTRING
    ### ----------------------

    
    
    /**
     * Devuelve la variable idlastest_games<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getIdlastest_games(){
        return $this->idlastest_games;
    }
    /**
     * Devuelve la variable gameId<br>
     * Descripcion de la variable: 
     * @return double
     */
    public function getGameId(){
        return $this->gameId;
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
     * Devuelve la variable gameMode<br>
     * Descripcion de la variable: EJ: CLASSIC
     * @return varchar(25)
     */
    public function getGameMode(){
        return $this->gameMode;
    }
    /**
     * Devuelve la variable gameType<br>
     * Descripcion de la variable: EJ: MATCHED_GAME
     * @return varchar(25)
     */
    public function getGameType(){
        return $this->gameType;
    }
    /**
     * Devuelve la variable subType<br>
     * Descripcion de la variable: EJ: RANKED_SOLO_5x5
     * @return varchar(25)
     */
    public function getSubType(){
        return $this->subType;
    }
    /**
     * Devuelve la variable season<br>
     * Descripcion de la variable: 
     * @return varchar(15)
     */
    public function getSeason(){
        return $this->season;
    }
    /**
     * Devuelve la variable createDate<br>
     * Descripcion de la variable: 
     * @return bigint(15)
     */
    public function getCreateDate(){
        return $this->createDate;
    }
    /**
     * Devuelve la variable kills<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getKills(){
        return $this->kills;
    }
    /**
     * Devuelve la variable deaths<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getDeaths(){
        return $this->deaths;
    }
    /**
     * Devuelve la variable assists<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getAssists(){
        return $this->assists;
    }
    /**
     * Devuelve la variable kda<br>
     * Descripcion de la variable: 
     * @return double
     */
    public function getKda(){
        return $this->kda;
    }

    
    /**
     * Pone el valor a la variable idlastest_games<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setIdlastest_games($value){
        $this->idlastest_games=$value;
    }
    /**
     * Pone el valor a la variable gameId<br>
     * Descripcion de la variable: 
     * @param double $value
     */
    public function setGameId($value){
        $this->gameId=$value;
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
     * Pone el valor a la variable gameMode<br>
     * Descripcion de la variable: EJ: CLASSIC
     * @param varchar(25) $value
     */
    public function setGameMode($value){
        $this->gameMode=$value;
    }
    /**
     * Pone el valor a la variable gameType<br>
     * Descripcion de la variable: EJ: MATCHED_GAME
     * @param varchar(25) $value
     */
    public function setGameType($value){
        $this->gameType=$value;
    }
    /**
     * Pone el valor a la variable subType<br>
     * Descripcion de la variable: EJ: RANKED_SOLO_5x5
     * @param varchar(25) $value
     */
    public function setSubType($value){
        $this->subType=$value;
    }
    /**
     * Pone el valor a la variable season<br>
     * Descripcion de la variable: 
     * @param varchar(15) $value
     */
    public function setSeason($value){
        $this->season=$value;
    }
    /**
     * Pone el valor a la variable createDate<br>
     * Descripcion de la variable: 
     * @param bigint(15) $value
     */
    public function setCreateDate($value){
        $this->createDate=$value;
    }
    /**
     * Pone el valor a la variable kills<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setKills($value){
        $this->kills=$value;
    }
    /**
     * Pone el valor a la variable deaths<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setDeaths($value){
        $this->deaths=$value;
    }
    /**
     * Pone el valor a la variable assists<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setAssists($value){
        $this->assists=$value;
    }
    /**
     * Pone el valor a la variable kda<br>
     * Descripcion de la variable: 
     * @param double $value
     */
    public function setKda($value){
        $this->kda=$value;
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
     * @return LastestGames
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
     * @return LastestGames
     */
    public function findOne() {
        $aWhereClause=[];
        
            if (isset($this->idlastest_games)) {
                $aWhereClause["idlastest_games"] = $this->idlastest_games;
            }
        
            if (isset($this->gameId)) {
                $aWhereClause["gameId"] = $this->gameId;
            }
        
            if (isset($this->champion)) {
                $aWhereClause["champion"] = $this->champion;
            }
        
            if (isset($this->gameMode)) {
                $aWhereClause["gameMode"] = $this->gameMode;
            }
        
            if (isset($this->gameType)) {
                $aWhereClause["gameType"] = $this->gameType;
            }
        
            if (isset($this->subType)) {
                $aWhereClause["subType"] = $this->subType;
            }
        
            if (isset($this->season)) {
                $aWhereClause["season"] = $this->season;
            }
        
            if (isset($this->createDate)) {
                $aWhereClause["createDate"] = $this->createDate;
            }
        
            if (isset($this->kills)) {
                $aWhereClause["kills"] = $this->kills;
            }
        
            if (isset($this->deaths)) {
                $aWhereClause["deaths"] = $this->deaths;
            }
        
            if (isset($this->assists)) {
                $aWhereClause["assists"] = $this->assists;
            }
        
            if (isset($this->kda)) {
                $aWhereClause["kda"] = $this->kda;
            }
        
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }
    
    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param array $aWhereClause array asociativo para la clausula where, por ejemplo, si
     * escribimos ["id"=>5], se traduce en el select al estilo: select * from table where id=5 limit 1.
     * @return LastestGames
     */
    public function findOneBy(array $aWhereClause) {
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }

    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param int $id id de la fila que queremos recuperar (en caso de ser diferente
     * al paremetro que se almacena en el objeto de la clase con la variable idlastest_games
     * @return LastestGames
     */
    public function findOneById($id = null) {
        return $this->findOneBy(["idlastest_games" => ($id != null) ? $id : $this->idlastest_games]);
    }

   
    /**
     * Recupera la todas las filas teniendo en cuenta los valores dados
     * a las variables y creando automaticamente la clausula where.
     * @return LastestGames
     */
    public function find() {
        $aWhereClause=[];
        
            if (isset($this->idlastest_games)) {
                $aWhereClause["idlastest_games"] = $this->idlastest_games;
            }
        
            if (isset($this->gameId)) {
                $aWhereClause["gameId"] = $this->gameId;
            }
        
            if (isset($this->champion)) {
                $aWhereClause["champion"] = $this->champion;
            }
        
            if (isset($this->gameMode)) {
                $aWhereClause["gameMode"] = $this->gameMode;
            }
        
            if (isset($this->gameType)) {
                $aWhereClause["gameType"] = $this->gameType;
            }
        
            if (isset($this->subType)) {
                $aWhereClause["subType"] = $this->subType;
            }
        
            if (isset($this->season)) {
                $aWhereClause["season"] = $this->season;
            }
        
            if (isset($this->createDate)) {
                $aWhereClause["createDate"] = $this->createDate;
            }
        
            if (isset($this->kills)) {
                $aWhereClause["kills"] = $this->kills;
            }
        
            if (isset($this->deaths)) {
                $aWhereClause["deaths"] = $this->deaths;
            }
        
            if (isset($this->assists)) {
                $aWhereClause["assists"] = $this->assists;
            }
        
            if (isset($this->kda)) {
                $aWhereClause["kda"] = $this->kda;
            }
        
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new LastestGames();
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
     * @return LastestGames array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function findBy(array $aWhereClause) {
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new LastestGames();
            $o->constructFromArray($aRow);
            array_push($aResults, $o);
        }
        return $aResults;
    }

    
    /**
     * Recupera todos los registros de la tabla
     * @return LastestGames array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function selectAll() {
        $aRows = $this->db->select('*')->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new LastestGames();
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
            
            if (isset($this->idlastest_games)) {
                $aData["idlastest_games"] = $this->idlastest_games;
            }
        
            if (isset($this->gameId)) {
                $aData["gameId"] = $this->gameId;
            }
        
            if (isset($this->champion)) {
                $aData["champion"] = $this->champion;
            }
        
            if (isset($this->gameMode)) {
                $aData["gameMode"] = $this->gameMode;
            }
        
            if (isset($this->gameType)) {
                $aData["gameType"] = $this->gameType;
            }
        
            if (isset($this->subType)) {
                $aData["subType"] = $this->subType;
            }
        
            if (isset($this->season)) {
                $aData["season"] = $this->season;
            }
        
            if (isset($this->createDate)) {
                $aData["createDate"] = $this->createDate;
            }
        
            if (isset($this->kills)) {
                $aData["kills"] = $this->kills;
            }
        
            if (isset($this->deaths)) {
                $aData["deaths"] = $this->deaths;
            }
        
            if (isset($this->assists)) {
                $aData["assists"] = $this->assists;
            }
        
            if (isset($this->kda)) {
                $aData["kda"] = $this->kda;
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
            
            if (isset($this->idlastest_games)) {
                $aData["idlastest_games"] = $this->idlastest_games;
            }
        
            if (isset($this->gameId)) {
                $aData["gameId"] = $this->gameId;
            }
        
            if (isset($this->champion)) {
                $aData["champion"] = $this->champion;
            }
        
            if (isset($this->gameMode)) {
                $aData["gameMode"] = $this->gameMode;
            }
        
            if (isset($this->gameType)) {
                $aData["gameType"] = $this->gameType;
            }
        
            if (isset($this->subType)) {
                $aData["subType"] = $this->subType;
            }
        
            if (isset($this->season)) {
                $aData["season"] = $this->season;
            }
        
            if (isset($this->createDate)) {
                $aData["createDate"] = $this->createDate;
            }
        
            if (isset($this->kills)) {
                $aData["kills"] = $this->kills;
            }
        
            if (isset($this->deaths)) {
                $aData["deaths"] = $this->deaths;
            }
        
            if (isset($this->assists)) {
                $aData["assists"] = $this->assists;
            }
        
            if (isset($this->kda)) {
                $aData["kda"] = $this->kda;
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
            
            if (isset($this->gameId)) {
                $aWithData["gameId"] = $this->gameId;
            }
            
            if (isset($this->champion)) {
                $aWithData["champion"] = $this->champion;
            }
            
            if (isset($this->gameMode)) {
                $aWithData["gameMode"] = $this->gameMode;
            }
            
            if (isset($this->gameType)) {
                $aWithData["gameType"] = $this->gameType;
            }
            
            if (isset($this->subType)) {
                $aWithData["subType"] = $this->subType;
            }
            
            if (isset($this->season)) {
                $aWithData["season"] = $this->season;
            }
            
            if (isset($this->createDate)) {
                $aWithData["createDate"] = $this->createDate;
            }
            
            if (isset($this->kills)) {
                $aWithData["kills"] = $this->kills;
            }
            
            if (isset($this->deaths)) {
                $aWithData["deaths"] = $this->deaths;
            }
            
            if (isset($this->assists)) {
                $aWithData["assists"] = $this->assists;
            }
            
            if (isset($this->kda)) {
                $aWithData["kda"] = $this->kda;
            }
            
        }
        if ($aWhereClause == null) {
            $aWhereClause["idlastest_games"] = $this->idlastest_games;
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
            
            if (isset($this->gameId)) {
                $aWithData["gameId"] = $this->gameId;
            }
            
            if (isset($this->champion)) {
                $aWithData["champion"] = $this->champion;
            }
            
            if (isset($this->gameMode)) {
                $aWithData["gameMode"] = $this->gameMode;
            }
            
            if (isset($this->gameType)) {
                $aWithData["gameType"] = $this->gameType;
            }
            
            if (isset($this->subType)) {
                $aWithData["subType"] = $this->subType;
            }
            
            if (isset($this->season)) {
                $aWithData["season"] = $this->season;
            }
            
            if (isset($this->createDate)) {
                $aWithData["createDate"] = $this->createDate;
            }
            
            if (isset($this->kills)) {
                $aWithData["kills"] = $this->kills;
            }
            
            if (isset($this->deaths)) {
                $aWithData["deaths"] = $this->deaths;
            }
            
            if (isset($this->assists)) {
                $aWithData["assists"] = $this->assists;
            }
            
            if (isset($this->kda)) {
                $aWithData["kda"] = $this->kda;
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
            
            if (isset($this->idlastest_games)) {
                $aWhereClause["idlastest_games"] = $this->idlastest_games;
            }
        
            if (isset($this->gameId)) {
                $aWhereClause["gameId"] = $this->gameId;
            }
        
            if (isset($this->champion)) {
                $aWhereClause["champion"] = $this->champion;
            }
        
            if (isset($this->gameMode)) {
                $aWhereClause["gameMode"] = $this->gameMode;
            }
        
            if (isset($this->gameType)) {
                $aWhereClause["gameType"] = $this->gameType;
            }
        
            if (isset($this->subType)) {
                $aWhereClause["subType"] = $this->subType;
            }
        
            if (isset($this->season)) {
                $aWhereClause["season"] = $this->season;
            }
        
            if (isset($this->createDate)) {
                $aWhereClause["createDate"] = $this->createDate;
            }
        
            if (isset($this->kills)) {
                $aWhereClause["kills"] = $this->kills;
            }
        
            if (isset($this->deaths)) {
                $aWhereClause["deaths"] = $this->deaths;
            }
        
            if (isset($this->assists)) {
                $aWhereClause["assists"] = $this->assists;
            }
        
            if (isset($this->kda)) {
                $aWhereClause["kda"] = $this->kda;
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
