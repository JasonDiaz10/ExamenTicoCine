<?php

class Usuario {
   
    private $cedula;
    private $nombre;
    private $telefono;
    private $correo;
    private $password;

    function __construct($cedula, $nombre, $telefono, $correo, $password) {
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->password = $password;
    }
    
    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getPassword() {
        return $this->password;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setPassword($password) {
        $this->password = $password;
    }



 
}
