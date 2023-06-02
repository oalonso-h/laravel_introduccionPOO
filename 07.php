<?php
include 'includes/header.php';

//METODOS: FUNCIONES DE CLASES
class Empleado {
    // Modificadores de acceso: public, private, protected
    public $nombre;
    public $apellidos;
    public $departamento;
    public $email;
    public $codigo;

    // Un contructor es una función que se ejecuta automáticamente cuando una clase es instanciada.
    public function __construct(string $nombre, string $apellidos, string $departamento, string $email, string $codigo){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;

    }
    
    // Método que devuelve el nombre del empleado
    public function nombreEmpleado(){
        echo $this->nombre . " " . $this->apellidos;
    }

    public function departamentoEmpleado(){
        return $this->departamento;
    }
}

//Cómo settear datos a una instancia de una clase: método 2: usando el constructor
$oscar = new Empleado(
    "Oscar",
    "Alonso",
    "Gerencia de TI",
    "oalonso@mexoil.com",
    "104379"
);

$cesar = new Empleado(
    "Cesar",
    "Alonso",
    "Mantenimiento",
    "armando_ch@hotmail.com",
    "000001"
);

echo "<pre>";
$oscar->nombreEmpleado();
echo "<br>";
echo $oscar->departamentoEmpleado();
echo "<br>";
var_dump($oscar);
echo "</pre>";

echo "<pre>";
$cesar->nombreEmpleado();
echo "<br>";
echo $cesar->departamentoEmpleado();
echo "<br>";
var_dump($cesar);
echo "</pre>";