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
 * Información sobre la tabla subs_games_ids
 * - Versión: 
 * - Fecha de creación: 
 * - Última modificación: 
 * - Comentario VIEW<
 * - Numero de columnas: 3
 * 
 * @author Javier
 */
class SubsGamesIdsBase extends CI_Model {

    /**
     * Nombre de la tabla a la que hace referencia el modelo.
     */
    const TABLE_NAME = 'subs_games_ids';

    ### ----------------------------------------------------------------------
    ### Listado de constantes para alojar el nombre de las columnas de la tabla 
    ### -----------------------------------------------------------------------
    
    /**  */ 
    const COLUMN_IDSUBS_GAMES_IDS="idsubs_games_ids";
    
    /**  */ 
    const COLUMN_IDSUSCRIPTOR="idsuscriptor";
    
    /**  */ 
    const COLUMN_GAMEID="gameId";
       
    
    
    ### -----------------------
    ### Listado de variables 
    ### ----------------------
    
    /**  @var binary(0) */ 
    private $idsubs_games_ids;
    
    /**  @var int(11) */ 
    private $idsuscriptor;
    
    /**  @var double */ 
    private $gameId;
        

    ### -----------------------

    
    
    ### -----------------------
    ### CONSTRUCTOR
    ### ----------------------

    /**
     * Constructor
     * @param $idsubs_games_ids binary(0) 
     * @param $idsuscriptor int(11) 
     * @param $gameId double 
     * 
     */
    function __construct($idsubs_games_ids=null,$idsuscriptor=null,$gameId=null) {
        $this->idsubs_games_ids = $idsubs_games_ids;
        $this->idsuscriptor = $idsuscriptor;
        $this->gameId = $gameId;
        
    }

    ### -----------------------

    
    
    ### -----------------------
    ### GETTERS Y SETTERS Y TOSTRING
    ### ----------------------

    
    
    /**
     * Devuelve la variable idsubs_games_ids<br>
     * Descripcion de la variable: 
     * @return binary(0)
     */
    public function getIdsubs_games_ids(){
        return $this->idsubs_games_ids;
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
     * Devuelve la variable gameId<br>
     * Descripcion de la variable: 
     * @return double
     */
    public function getGameId(){
        return $this->gameId;
    }

    
    /**
     * Pone el valor a la variable idsubs_games_ids<br>
     * Descripcion de la variable: 
     * @param binary(0) $value
     */
    public function setIdsubs_games_ids($value){
        $this->idsubs_games_ids=$value;
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
     * Pone el valor a la variable gameId<br>
     * Descripcion de la variable: 
     * @param double $value
     */
    public function setGameId($value){
        $this->gameId=$value;
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
     * @return SubsGamesIds
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
     * @return SubsGamesIds
     */
    public function findOne() {
        $aWhereClause=[];
        
            if (isset($this->idsubs_games_ids)) {
                $aWhereClause["idsubs_games_ids"] = $this->idsubs_games_ids;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->gameId)) {
                $aWhereClause["gameId"] = $this->gameId;
            }
        
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }
    
    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param array $aWhereClause array asociativo para la clausula where, por ejemplo, si
     * escribimos ["id"=>5], se traduce en el select al estilo: select * from table where id=5 limit 1.
     * @return SubsGamesIds
     */
    public function findOneBy(array $aWhereClause) {
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }

    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param int $id id de la fila que queremos recuperar (en caso de ser diferente
     * al paremetro que se almacena en el objeto de la clase con la variable idsubs_games_ids
     * @return SubsGamesIds
     */
    public function findOneById($id = null) {
        return $this->findOneBy(["idsubs_games_ids" => ($id != null) ? $id : $this->idsubs_games_ids]);
    }

   
    /**
     * Recupera la todas las filas teniendo en cuenta los valores dados
     * a las variables y creando automaticamente la clausula where.
     * @return SubsGamesIds
     */
    public function find() {
        $aWhereClause=[];
        
            if (isset($this->idsubs_games_ids)) {
                $aWhereClause["idsubs_games_ids"] = $this->idsubs_games_ids;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->gameId)) {
                $aWhereClause["gameId"] = $this->gameId;
            }
        
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SubsGamesIds();
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
     * @return SubsGamesIds array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function findBy(array $aWhereClause) {
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SubsGamesIds();
            $o->constructFromArray($aRow);
            array_push($aResults, $o);
        }
        return $aResults;
    }

    
    /**
     * Recupera todos los registros de la tabla
     * @return SubsGamesIds array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function selectAll() {
        $aRows = $this->db->select('*')->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SubsGamesIds();
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
            
            if (isset($this->idsubs_games_ids)) {
                $aData["idsubs_games_ids"] = $this->idsubs_games_ids;
            }
        
            if (isset($this->idsuscriptor)) {
                $aData["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->gameId)) {
                $aData["gameId"] = $this->gameId;
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
            
            if (isset($this->idsubs_games_ids)) {
                $aData["idsubs_games_ids"] = $this->idsubs_games_ids;
            }
        
            if (isset($this->idsuscriptor)) {
                $aData["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->gameId)) {
                $aData["gameId"] = $this->gameId;
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
            
            if (isset($this->gameId)) {
                $aWithData["gameId"] = $this->gameId;
            }
            
        }
        if ($aWhereClause == null) {
            $aWhereClause["idsubs_games_ids"] = $this->idsubs_games_ids;
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
            
            if (isset($this->gameId)) {
                $aWithData["gameId"] = $this->gameId;
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
            
            if (isset($this->idsubs_games_ids)) {
                $aWhereClause["idsubs_games_ids"] = $this->idsubs_games_ids;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->gameId)) {
                $aWhereClause["gameId"] = $this->gameId;
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
