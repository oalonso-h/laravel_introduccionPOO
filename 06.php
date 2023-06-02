<?php
include 'includes/header.php';

//CONSTRUCTOR PROPERTY PROMOTION. FUNCIONAL A PARTIR DE PHP 8.
class Empleado {
    // Modificadores de acceso: public, private, protected
    
    // Un contructor es una función que se ejecuta automáticamente cuando una clase es instanciada.
    public function __construct(
        public $nombre,
        public $apellidos,
        public $departamento,
        public $email,
        public $codigo,
    ){}
}

//Cómo settear datos a una instancia de una clase: método 2: usando el constructor
$empleado = new Empleado(
    "Oscar",
    "Alonso",
    "Gerencia de TI",
    "oalonso@mexoil.com",
    "104379"
);

$empleado2 = new Empleado(
    "Cesar",
    "Alonso",
    "Mantenimiento",
    "armando_ch@hotmail.com",
    "000001"
);

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";