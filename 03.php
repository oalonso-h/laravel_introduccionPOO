<?php
include 'includes/header.php';

//ABSTRACCIÓN: ATRIBUTOS DE UNA CLASE, LAS CARACTERÍSTICAS DE UNA CLASE
class Empleado {
    // Modificadores de acceso: public, private, protected
    public $nombre;
    public $apellidos;
    public $departamento;
    public $email;
    public $codigo;
}

$oscar = new Empleado;

//Cómo settear datos a una instancia de una clase: método 1
$oscar->nombre      = "Oscar";
$oscar->apellidos   = "Alonso";
$oscar->departamento= "Gerencia TI";
$oscar->email       = "oalonso@mexoil.com";
$oscar->codigo       = "104379";

echo "<pre>";
var_dump($oscar);
echo "</pre>";