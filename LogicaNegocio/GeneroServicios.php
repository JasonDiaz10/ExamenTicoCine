<?php 
require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/Genero.php';

class GeneroServicios {
    
    private $db;  
    
    function __construct() {
        $this->db = new ConexionBD();
    }
  
    function agregarGenero($registro) {
        $this->db->getConeccion();
        $sql = "INSERT INTO GENEROS(nombregenero) VALUES(?)";
        $paramType = 's';
        $paramValue = array($registro->getNombre());
        
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
    function modificarGenero($registro) {
        $this->db->getConeccion();
        $sql = "UPDATE GENEROS SET NOMBREGENERO = ? WHERE CODIGOGENERO= ?";
        $paramType = "si";
        $paramValue = array($registro->getNombre(),$registro->getCodigo());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
 
   
    function obtenerGenero() {
        $this->db->getConeccion();        
        $sql = "SELECT * FROM GENEROS ORDER BY CODIGOGENERO";
        $registros = $this->db->executeQueryReturnData($sql);
        $generos =array();
        
        foreach ($registros as $posicion => $row){
            $genero = new Genero($row['codigogenero'],$row['nombregenero']);
            array_push($generos, $genero);
        }
        $this->db->cerrarConeccion();        
        return $generos;
    } 
    
    function obtenerGeneroByCodigo($codigo) {
        $this->db->getConeccion();
        $sql = "SELECT * FROM GENEROS WHERE CODIGOGENERO = $codigo";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        $genero = new Genero($registros[0]['codigogenero'],$registros[0]['nombregenero']);
        return $genero;
    }    
}

?>