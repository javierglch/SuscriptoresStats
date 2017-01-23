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
 * Información sobre la tabla suscriptores_youtubers
 * - Versión: 10
 * - Fecha de creación: 2017-01-22 17:30:41
 * - Última modificación: 
 * - Comentario <
 * - Numero de columnas: 3
 * 
 * @author Javier
 */
class SuscriptoresYoutubersBase extends CI_Model {

    /**
     * Nombre de la tabla a la que hace referencia el modelo.
     */
    const TABLE_NAME = 'suscriptores_youtubers';

    ### ----------------------------------------------------------------------
    ### Listado de constantes para alojar el nombre de las columnas de la tabla 
    ### -----------------------------------------------------------------------
    
    /**  */ 
    const COLUMN_IDSUSCRIPTORES_YOUTUBERS="idsuscriptores_youtubers";
    
    /**  */ 
    const COLUMN_IDSUSCRIPTOR="idsuscriptor";
    
    /**  */ 
    const COLUMN_IDYOUTUBER="idyoutuber";
       
    
    
    ### -----------------------
    ### Listado de variables 
    ### ----------------------
    
    /**  @var int(11) */ 
    private $idsuscriptores_youtubers;
    
    /**  @var int(11) */ 
    private $idsuscriptor;
    
    /**  @var int(11) */ 
    private $idyoutuber;
        

    ### -----------------------

    
    
    ### -----------------------
    ### CONSTRUCTOR
    ### ----------------------

    /**
     * Constructor
     * @param $idsuscriptores_youtubers int(11) 
     * @param $idsuscriptor int(11) 
     * @param $idyoutuber int(11) 
     * 
     */
    function __construct($idsuscriptores_youtubers=null,$idsuscriptor=null,$idyoutuber=null) {
        $this->idsuscriptores_youtubers = $idsuscriptores_youtubers;
        $this->idsuscriptor = $idsuscriptor;
        $this->idyoutuber = $idyoutuber;
        
    }

    ### -----------------------

    
    
    ### -----------------------
    ### GETTERS Y SETTERS Y TOSTRING
    ### ----------------------

    
    
    /**
     * Devuelve la variable idsuscriptores_youtubers<br>
     * Descripcion de la variable: 
     * @return int(11)
     */
    public function getIdsuscriptores_youtubers(){
        return $this->idsuscriptores_youtubers;
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
     * Pone el valor a la variable idsuscriptores_youtubers<br>
     * Descripcion de la variable: 
     * @param int(11) $value
     */
    public function setIdsuscriptores_youtubers($value){
        $this->idsuscriptores_youtubers=$value;
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
     * @return SuscriptoresYoutubers
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
     * @return SuscriptoresYoutubers
     */
    public function findOne() {
        $aWhereClause=[];
        
            if (isset($this->idsuscriptores_youtubers)) {
                $aWhereClause["idsuscriptores_youtubers"] = $this->idsuscriptores_youtubers;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->idyoutuber)) {
                $aWhereClause["idyoutuber"] = $this->idyoutuber;
            }
        
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }
    
    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param array $aWhereClause array asociativo para la clausula where, por ejemplo, si
     * escribimos ["id"=>5], se traduce en el select al estilo: select * from table where id=5 limit 1.
     * @return SuscriptoresYoutubers
     */
    public function findOneBy(array $aWhereClause) {
        $aResult = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME, 1)->row_array(0);
        return $this->constructFromArray($aResult);
    }

    /**
     * Recupera una fila de los registros seleccionados por la clausula where<br>
     * Un ejemplo de consulta seria: select * from table limit 1
     * @param int $id id de la fila que queremos recuperar (en caso de ser diferente
     * al paremetro que se almacena en el objeto de la clase con la variable idsuscriptores_youtubers
     * @return SuscriptoresYoutubers
     */
    public function findOneById($id = null) {
        return $this->findOneBy(["idsuscriptores_youtubers" => ($id != null) ? $id : $this->idsuscriptores_youtubers]);
    }

   
    /**
     * Recupera la todas las filas teniendo en cuenta los valores dados
     * a las variables y creando automaticamente la clausula where.
     * @return SuscriptoresYoutubers
     */
    public function find() {
        $aWhereClause=[];
        
            if (isset($this->idsuscriptores_youtubers)) {
                $aWhereClause["idsuscriptores_youtubers"] = $this->idsuscriptores_youtubers;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->idyoutuber)) {
                $aWhereClause["idyoutuber"] = $this->idyoutuber;
            }
        
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SuscriptoresYoutubers();
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
     * @return SuscriptoresYoutubers array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function findBy(array $aWhereClause) {
        $aRows = $this->db->select('*')->where($aWhereClause)->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SuscriptoresYoutubers();
            $o->constructFromArray($aRow);
            array_push($aResults, $o);
        }
        return $aResults;
    }

    
    /**
     * Recupera todos los registros de la tabla
     * @return SuscriptoresYoutubers array con todos los objetos construidos a partir de las filas que devolvio la consulta
     */
    public function selectAll() {
        $aRows = $this->db->select('*')->get(self::TABLE_NAME)->result_array();
        $aResults = [];
        foreach ($aRows as $aRow) {
            $o = new SuscriptoresYoutubers();
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
            
            if (isset($this->idsuscriptores_youtubers)) {
                $aData["idsuscriptores_youtubers"] = $this->idsuscriptores_youtubers;
            }
        
            if (isset($this->idsuscriptor)) {
                $aData["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->idyoutuber)) {
                $aData["idyoutuber"] = $this->idyoutuber;
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
            
            if (isset($this->idsuscriptores_youtubers)) {
                $aData["idsuscriptores_youtubers"] = $this->idsuscriptores_youtubers;
            }
        
            if (isset($this->idsuscriptor)) {
                $aData["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->idyoutuber)) {
                $aData["idyoutuber"] = $this->idyoutuber;
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
            
        }
        if ($aWhereClause == null) {
            $aWhereClause["idsuscriptores_youtubers"] = $this->idsuscriptores_youtubers;
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
            
            if (isset($this->idsuscriptores_youtubers)) {
                $aWhereClause["idsuscriptores_youtubers"] = $this->idsuscriptores_youtubers;
            }
        
            if (isset($this->idsuscriptor)) {
                $aWhereClause["idsuscriptor"] = $this->idsuscriptor;
            }
        
            if (isset($this->idyoutuber)) {
                $aWhereClause["idyoutuber"] = $this->idyoutuber;
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
