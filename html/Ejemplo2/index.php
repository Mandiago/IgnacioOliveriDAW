<?php

class contacto{
    var $nombre;
    var $apellidos;
    var $edad;
    var $email;
    
    //Metodo constructor antiguo
    
    /*function contacto($nombre, $apellidos, $edad, $email){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->email = $email;
    }*/
    
    function __construct($nombre, $apellidos, $edad, $email) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->email = $email;
    }
    
}

$mi_contacto = new contacto("juan", "perez", 22, "dawei@uganda.queen");

echo "nombre: ".$mi_contacto->nombre." apellidos: ".$mi_contacto->apellidos;
?>

