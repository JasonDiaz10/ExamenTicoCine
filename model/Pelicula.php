<?php

class Pelicula {
   
    private $codigoPelicula;
    private $nombre;
    private $director;
    private $sinopsis;
    private $genero;
    private $puntuacion;
    private $imagen;
    
    function __construct($codigoPelicula, $nombre, $director, $sinopsis, $genero, $puntuacion, $imagen) {
        $this->codigoPelicula = $codigoPelicula;
        $this->nombre = $nombre;
        $this->director = $director;
        $this->sinopsis = $sinopsis;
        $this->genero = $genero;
        $this->puntuacion = $puntuacion;
        $this->imagen = $imagen;
    }

    
    function getCodigoPelicula() {
        return $this->codigoPelicula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDirector() {
        return $this->director;
    }

    function getSinopsis() {
        return $this->sinopsis;
    }
    
    function getGenero() {
        return $this->genero;
    }
    
    function getPuntuacion() {
        return $this->puntuacion;
    }
    
    function getImagen() {
        return $this->imagen;
    }
}
