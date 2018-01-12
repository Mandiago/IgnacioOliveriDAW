<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contacto
 *
 * @author web
 */
class contacto {

    var $nombre;
    var $apellidos;
    var $edad;
    var $email;

    function __construct($nombre, $apellidos, $edad, $email) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->email = $email;
    }
    
    function setEmail($email){
        $this->email = $email;
    }

}
