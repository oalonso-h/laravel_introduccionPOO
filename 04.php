<?php
include 'includes/header.php';

//METODO CONSTRUCTOR
class Empleado {
    // Modificadores de acceso: public, private, protected
    public $nombre;
    public $apellidos;
    public $departamento;
    public $email;
    public $codigo;

    // Un contructor es una función que se ejecuta automáticamente cuando una clase es instanciada.
    public function __construct($nombre, $apellidos, $departamento, $email, $codigo){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
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