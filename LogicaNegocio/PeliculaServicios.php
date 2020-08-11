<?php 
require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/Pelicula.php';

class PeliculaServicios {
    
    private $db;  
    
    function __construct() {
        $this->db = new ConexionBD();
    }
  
    function agregarPelicula($registro) {
        $this->db->getConeccion();
        $sql = "INSERT INTO peliculas(Nombre,Director,Sinopsis,Genero,Puntuacion,Imagen) VALUES(?,?,?,?,?,?)";
        $paramType = 'ssssss';
        $paramValue = array($registro->getNombre(),$registro->getDirector(),$registro->getSinopsis(),$registro->getGenero(),$registro->getPuntuacion(),$registro->getImagen() );
        
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
    function modificarPelicula($registro) {
        $this->db->getConeccion();
        $sql = "UPDATE peliculas SET Nombre = ?,Director= ?,Sinopsis = ?, Genero=?,Puntuacion=?,Imagen=? WHERE CodigoPelicula = ?";
        $paramType = "ssssssi";
        $paramValue = array($registro->getNombre(),$registro->getDirector(),$registro->getSinopsis(),$registro->getGenero(),$registro->getPuntuacion(),$registro->getImagen(),$registro->getCodigo() );
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
    function eliminarPelicula($codigo) {
        $this->db->getConeccion();
        $sql = "DELETE FROM peliculas WHERE CodigoPelicula = ?";
        $paramType = "i";
        $paramValue = array($codigo);
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }    
   
    function obtenerPelicula() {
        $this->db->getConeccion();        
        $sql = "SELECT * FROM peliculas ORDER BY CodigoPelicula";
        $registros = $this->db->executeQueryReturnData($sql);
        $peliculas =array();
        
        foreach ($registros as $posicion => $row){
            $pelicula = new Pelicula($row['CodigoPelicula'],$row['Nombre'],$row['Director'],$row['Sinopsis'],$row['Genero'],$row['Puntuacion'],$row['Imagen']);
            array_push($peliculas, $pelicula);
        }
        $this->db->cerrarConeccion();        
        return $peliculas;
    } 
    
    function obtenerPeliculaByCodigo($codigo) {
        $this->db->getConeccion();
        $sql = "SELECT * FROM peliculas WHERE CodigoPelicula = $codigo";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        $pelicula = new Pelicula($registros[0]['CodigoPelicula'],$registros[0]['Nombre'],$registros[0]['Director'],$registros[0]['Sinopsis'],$registros[0]['Genero'],$registros[0]['Puntuacion'],$registros[0]['Imagen']);
        return $pelicula;
    }    
}

?>