<?php
require ("contacto.php");

$mi_contacto = new contacto("juan", "perez", 22, "dawei@uganda.queen");

echo "nombre: ".$mi_contacto->nombre." apellidos: ".$mi_contacto->apellidos;

$mi_contacto->email = "yeeee boi";

?>