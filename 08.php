<?php
include 'includes/header.php';

//METODOS: FUNCIONES DE CLASES
class Empleado {
    /** Modificadores de acceso: public, private, protected
     * public: accesible dentro de la clase y sus instancias.
     * private: accesible solo dentro de la clase y no en sus instancias.
     * protected: accesible solo dento de la clase. No se puede modificar desde las instancias.
    */
    private $nombre;
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

    public function getNombre() {
        return $this->nombre;
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

echo $oscar->getNombre();

echo "<pre>";
var_dump($oscar);
echo "</pre>";