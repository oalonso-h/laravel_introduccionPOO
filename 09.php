<?php
include 'includes/header.php';

//GETTERS Y SETTERS
class Empleado {
    /** Modificadores de acceso: public, private, protected
     * public: accesible dentro de la clase y sus instancias.
     * private: accesible solo dentro de la clase y no en sus instancias.
     * protected: accesible solo dento de la clase. No se puede modificar desde las instancias.
     * Revisa cual es la diferencia entre los ultimos dos
    */
    protected $codigo;
    protected $nombre;
    protected $apellidos;
    protected $departamento;
    protected $email;

    // Un contructor es una función que se ejecuta automáticamente cuando una clase es instanciada.
    public function __construct(string $codigo, string $nombre, string $apellidos, string $departamento, string $email){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->departamento = $departamento;
        $this->email = $email;
    }

    /*  CONVENCIÓN (ESTANDAR) DE LA SINTAXIS DE LOS MÉTODOS QUE OBTIENEN O MODIFICAN UN VALOR
        Get - Para obtener un valor
        Set - Para modificar un valor
     */

    public function getCodigo() {
        return $this->codigo;
    }
    
    public function setCodigo( string $codigo ) {
        $this->codigo = $codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre( string $nombre ) {
        $this->nombre = $nombre;
    }

    public function getDepartamento() {
        return $this->departamento;
    }
    
    public function setDepartamento( string $departamento ) {
        $this->departamento = $departamento;
    }
}

//Cómo settear datos a una instancia de una clase: método 2: usando el constructor
$oscar = new Empleado(
    "104379",
    "Oscar",
    "Alonso",
    "Gerencia de TI",
    "oalonso@mexoil.com"
);

// Acceder a $oscar->nombre da error ya que no podemos acceder a una variable privada desde una instancia de clase.
// echo $oscar->nombre;

echo "<pre>";
echo $oscar->getcodigo(); // obteniendo $codigo
echo "</pre>";

echo "<pre>";
echo $oscar->setCodigo("101101"); // setteando código
echo "</pre>";

echo "<pre>";
echo "El nuevo código es: " . $oscar->getcodigo(); // obteniendo $codigo
echo "</pre>";

echo "<pre>";
echo $oscar->getNombre() . "<br>"; // obteniendo $nombre
echo "</pre>";

echo $oscar->setNombre("Cesar"); // setteando $nombre

echo "<pre>";
echo "El nuevo nombre es: " . $oscar->getNombre() . "<br>"; // obteniendo $nombre
echo "</pre>";

echo "<pre>";
echo $oscar->getDepartamento(); // obteniendo $codigo
echo "</pre>";

echo "<pre>";
echo $oscar->setDepartamento("Mantenimiento"); // setteando código
echo "</pre>";

echo "<pre>";
echo "El nuevo departamento es: " . $oscar->getDepartamento(); // obteniendo $codigo
echo "</pre>";