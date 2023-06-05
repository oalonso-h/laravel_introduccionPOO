<?php
include 'includes/header.php';
// Incluimos el archivo en el que se encuentra la clase con la que vamos a interactuar.
include 'DB.php';

//COMUNICAR CLASES
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

$oscar = new Empleado(
    "104379",
    "Oscar",
    "Alonso",
    "Gerencia de TI",
    "oalonso@mexoil.com"
);

// Guardamos en una variable el nombre de $oscar
$nombre = $oscar->getNombre();

echo $nombre; // Este dato lo mandaremos a la clase DB, en DB.php
echo "<br>";

$db = new DB($nombre);

echo var_dump($db);
echo "<br>";
$db->guardarInformacion();