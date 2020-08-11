<?php

require_once 'baseDatos/conexion.php';
require_once 'Pelicula.php';

class PeliculaModel {
    //put your code here
private $bd;
    
    function __construct() {
        $this->bd = new ConexionBD();
    }

    public function listarPeliculas(){
        $peliculas = array();
        $this->bd->getConeccion();        
        $sql="SELECT * FROM PELICULAS";        
        $registros = $this->bd->executeQueryReturnData($sql);                
        $this->bd->cerrarConeccion();
        
        foreach($registros as $row) {
            $peliculas = new Pelicula($codigoPelicula, $nombre, $director, $sinopsis, $genero, $puntuacion, $imagen);
            array_push($peliculas, $pelicula);
        }
        
        return $peliculas;
    }
    
    public function buscarPeliculas($nombre){
        $this->bd->getConeccion();
        $sql="SELECT * FROM PELICULAS WHERE NOMBRE = $nombre";        
        $registros = $this->bd->executeQueryReturnData($sql);  
        $this->bd->cerrarConeccion();
        
        if($registros !=null){
            $codigoPelicula = $registros[0]['codigoPelicula'];
            $nombre = $registros[0]['nombre'];
            $director = $registros[0]['director'];
            $sinopsis = $registros[0]['sinopsis'];
            $genero = $registros[0]['genero'];
            $puntuacion = $registros[0]['puntuacion'];
            $imagen = $registros[0]['imagen'];
            
            $pelicula = new Pelicula($codigoPelicula, $nombre, $director, $sinopsis, $genero, $puntuacion, $imagen);
            return $pelicula;
        }else{
           return null;   
        }
    }
        
    public function actualizar($pelicula){
        $this->bd->getConeccion();        
        $sql="UPDATE PELICULAS SET CODIGOPELICULA=?, DIRECTOR=?, SINOPSIS=?, GENERO=?, PUNTUACION=?, IMAGEN=? WHERE NOMBRE=?";
        $paramType= 'ssis';
        $paramValue= array($pelicula->getCodigoPelicula(),
                           $pelicula->getDirector(),
                           $pelicula->getSinopsis(),
                           $pelicula->getGenero());
                           $pelicula->getPuntuacion();
                           $pelicula->getImagen();
                           $pelicula->getNombre();
        $registros = $this->bd->executeQuery($sql, $paramType, $paramValue);                
        $this->bd->cerrarConeccion();        
    }
    
}

