<?php

class Persona {
    private $nombre;
    private $apellido;
    private $edad;
    private $ci;

    public function __construct($nombre, $apellido, $edad, $ci){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->ci = $ci;
    }

    // Definición de métodos

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getCi(){
        return $this->ci;
    }
}

?>
