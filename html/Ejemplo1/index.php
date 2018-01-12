<?php

class contacto{
    var $nombre;
    var $apellidos;
    var $edad;
    var $email;
    
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    function getNombre(){
        return $this->nombre;
    }
}

$mi_contacto = new contacto();

$mi_contacto->setNombre("Juan");

echo "el contacto se llama: ".$mi_contacto->getNombre();


?>