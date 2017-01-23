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
 * Información sobre la tabla summary_stats
 * - Versión: 10
 * - Fecha de creación: 2017-01-22 16:12:13
 * - Última modificación: 
 * - Comentario <
 * - Numero de columnas: 6
 * 
 * @author Javier
 */
class SummaryStatsBase extends CI_Model {

    /**
     * Nombre de la tabla a la que hace referencia el modelo.
     */
    const TABLE_NAME = 'summary_stats';

    ### ----------------------------------------------------------------------
    ### Listado de constantes para alojar el nombre de las columnas de la tabla 
    ### -----------------------------------------------------------------------
    
    /**  */ 
    const COLUMN_IDSUMMARY_STATS="idsummary_stats";
    
    /**  */ 
    const COLUMN_IDSUSCRIPTOR="idsuscriptor";
    
    /**  */ 
    const COLUMN_PLAYERSTATSUMMARYTYPE="playerStatSummaryType";
    
    /**  */ 
    const COLUMN_WINS="wins";
    
    /**  */ 
    const COLUMN_LOSSES="losses";
    
    /**  */ 
    const COLUMN_MODIFYDATE="modifyDate";
       
    
    
    ### -----------------------
    ### Listado de variables 
    ### ----------------------
    
    /**  @var int(11) */ 
    private $idsummary_stats;
    
    /**  @var int(15) */ 
    private $idsuscriptor;
    
    /**  @var varchar(30) */ 
    private $playerStatSummaryType;
    
    /**  @var int(11) */ 
    private $wins;
    
    /**  @var int(11) */ 
    private $losses;
    
    /**  @var int(15) */ 
    private $modifyDate;
        

    ### -----------------------

    
    
    ### -----------------------
    ### CONSTRUCTOR
    ### ----------------------

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
        $this->idsummary_stats = $idsummary_stats;
        $this->idsuscriptor = $idsuscriptor;
        $this->playerStatSummaryType = $playerStatSummaryType;
        $this->wins = $wins;
        $this->losses = $losses;
        $this->modifyDate = $modifyDate;
        
    }

    ### -----------------------

    
    
    ### -----------------------
    ### GETTERS Y SETTERS Y TOSTRING
    ### ----------------------

    
    
    /**
     * Devuelve la variable idsummary_stats<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getIdsummary_stats(){
        return $this->idsummary_stats;
    }
    /**
     * Devuelve la variable idsuscriptor<br>
     * Descripcion de la variable: 
     * @return int(15)
     */
    public function getIdsuscriptor(){
        return $this->idsuscriptor;
    }
    /**
     * Devuelve la variable playerStatSummaryType<br>
     * Descripcion de la variable: 
     * @return varchar(30)
     */
    public function getPlayerStatSummaryType(){
        return $this->playerStatSummaryType;
    }
    /**
     * Devuelve la variable wins<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getWins(){
        return $this->wins;
    }
    /**
     * Devuelve la variable losses<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getLosses(){
        return $this->losses;
    }
    /**
     * Devuelve la variable modifyDate<br>
     * Descripcion de la variable: 
     * @return int(15)
     */
    public function getModifyDate(){
        return $this->modifyDate;
    }

    
    /**
     * Pone el valor a la variable idsummary_stats<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setIdsummary_stats($value){
        $this->idsummary_stats=$value;
    }
    /**
     * Pone el valor a la variable idsuscriptor<br>
     * Descripcion de la variable: 
     * @param int(15) $value
     */
    public function setIdsuscriptor($value){
        $this->idsuscriptor=$value;
    }
    /**
     * Pone el valor a la variable playerStatSummaryType<br>
     * Descripcion de la variable: 
     * @param varchar(30) $value
     */
    public function setPlayerStatSummaryType($value){
        $this->playerStatSummaryType=$value;
    }
    /**
     * Pone el valor a la variable wins<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setWins($value){
        $this->wins=$value;
    }
    /**
     * Pone el valor a la variable losses<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setLosses($value){
        $this->losses=$value;
    }
    /**
     * Pone el valor a la variable modifyDate<br>
     * Descripcion de la variable: 
     * @param int(15) $value
     */
    public function setModifyDate($value){
        $this->modifyDate=$value;
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
     * @return SummaryStats
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
     * @return SummaryStats
     */
    public function findOne() {
        $aWhereClause=[];
        
            if (isset($this->idsummary_stats)) {
                $aWhereClause["idsummary_stats"] = $this->idsummary_stats;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->playerStatSummaryType)) {
                $aWhereClause["playerStatSummaryType"] = $this->playerStatSummaryType;
            }
        
            if (isset($this->wins)) {
                $aWhereClause["wins"] = $this->wins;
            }
        
            if (isset($this->losses)) {
                $aWhereClause["losses"] = $this->losses;
            }
        
            if (isset($this->modifyDate)) {
                $aWhereClause["modifyDate"] = $this->modifyDate;
            }
        
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }
    
    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param array $aWhereClause array asociativo para la clausula where, por ejemplo, si
     * escribimos ["id"=>5], se traduce en el select al estilo: select * from table where id=5 limit 1.
     * @return SummaryStats
     */
    public function findOneBy(array $aWhereClause) {
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }

    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param int $id id de la fila que queremos recuperar (en caso de ser diferente
     * al paremetro que se almacena en el objeto de la clase con la variable idsummary_stats
     * @return SummaryStats
     */
    public function findOneById($id = null) {
        return $this->findOneBy(["idsummary_stats" => ($id != null) ? $id : $this->idsummary_stats]);
    }

   
    /**
     * Recupera la todas las filas teniendo en cuenta los valores dados
     * a las variables y creando automaticamente la clausula where.
     * @return SummaryStats
     */
    public function find() {
        $aWhereClause=[];
        
            if (isset($this->idsummary_stats)) {
                $aWhereClause["idsummary_stats"] = $this->idsummary_stats;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->playerStatSummaryType)) {
                $aWhereClause["playerStatSummaryType"] = $this->playerStatSummaryType;
            }
        
            if (isset($this->wins)) {
                $aWhereClause["wins"] = $this->wins;
            }
        
            if (isset($this->losses)) {
                $aWhereClause["losses"] = $this->losses;
            }
        
            if (isset($this->modifyDate)) {
                $aWhereClause["modifyDate"] = $this->modifyDate;
            }
        
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SummaryStats();
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
     * @return SummaryStats array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function findBy(array $aWhereClause) {
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SummaryStats();
            $o->constructFromArray($aRow);
            array_push($aResults, $o);
        }
        return $aResults;
    }

    
    /**
     * Recupera todos los registros de la tabla
     * @return SummaryStats array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function selectAll() {
        $aRows = $this->db->select('*')->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SummaryStats();
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
            
            if (isset($this->idsummary_stats)) {
                $aData["idsummary_stats"] = $this->idsummary_stats;
            }
        
            if (isset($this->idsuscriptor)) {
                $aData["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->playerStatSummaryType)) {
                $aData["playerStatSummaryType"] = $this->playerStatSummaryType;
            }
        
            if (isset($this->wins)) {
                $aData["wins"] = $this->wins;
            }
        
            if (isset($this->losses)) {
                $aData["losses"] = $this->losses;
            }
        
            if (isset($this->modifyDate)) {
                $aData["modifyDate"] = $this->modifyDate;
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
            
            if (isset($this->idsummary_stats)) {
                $aData["idsummary_stats"] = $this->idsummary_stats;
            }
        
            if (isset($this->idsuscriptor)) {
                $aData["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->playerStatSummaryType)) {
                $aData["playerStatSummaryType"] = $this->playerStatSummaryType;
            }
        
            if (isset($this->wins)) {
                $aData["wins"] = $this->wins;
            }
        
            if (isset($this->losses)) {
                $aData["losses"] = $this->losses;
            }
        
            if (isset($this->modifyDate)) {
                $aData["modifyDate"] = $this->modifyDate;
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
            
            if (isset($this->playerStatSummaryType)) {
                $aWithData["playerStatSummaryType"] = $this->playerStatSummaryType;
            }
            
            if (isset($this->wins)) {
                $aWithData["wins"] = $this->wins;
            }
            
            if (isset($this->losses)) {
                $aWithData["losses"] = $this->losses;
            }
            
            if (isset($this->modifyDate)) {
                $aWithData["modifyDate"] = $this->modifyDate;
            }
            
        }
        if ($aWhereClause == null) {
            $aWhereClause["idsummary_stats"] = $this->idsummary_stats;
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
            
            if (isset($this->playerStatSummaryType)) {
                $aWithData["playerStatSummaryType"] = $this->playerStatSummaryType;
            }
            
            if (isset($this->wins)) {
                $aWithData["wins"] = $this->wins;
            }
            
            if (isset($this->losses)) {
                $aWithData["losses"] = $this->losses;
            }
            
            if (isset($this->modifyDate)) {
                $aWithData["modifyDate"] = $this->modifyDate;
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
            
            if (isset($this->idsummary_stats)) {
                $aWhereClause["idsummary_stats"] = $this->idsummary_stats;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->playerStatSummaryType)) {
                $aWhereClause["playerStatSummaryType"] = $this->playerStatSummaryType;
            }
        
            if (isset($this->wins)) {
                $aWhereClause["wins"] = $this->wins;
            }
        
            if (isset($this->losses)) {
                $aWhereClause["losses"] = $this->losses;
            }
        
            if (isset($this->modifyDate)) {
                $aWhereClause["modifyDate"] = $this->modifyDate;
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
