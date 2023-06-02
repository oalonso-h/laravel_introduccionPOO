<?php
include 'includes/header.php';

/* METODOS ESTATICOS: funciones que se llaman sin necesidad de instanciar una clase. No requieren instancia para ejecutarse.
 * VARIABLES ESTATICAS: Se comparten a nivel clase, es decir que si una instancia modifica su valor, valdrá lo mismo en todas las demás.
 * Para acceder a variables o métodos estáticos se utiliza la palabra reservada self, con la sintaxis "::"
*/
class Empleado {
    public static $nombre;
    public $apellidos;
    public $departamento;
    public $email;
    public $codigo;

    // Si queremos settear valores a una variable estática usamos la palabra reservada self.
    public function __construct(string $nombre, string $apellidos, string $departamento, string $email, string $codigo){
        self::$nombre = $nombre; // Usamos self para settear un valor a la variable estática $nombre.
        $this->apellidos = $apellidos;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
    
    public function setNombre( string $nombre) {
        $this->nombre = $nombre;
    }
    
    // Para crear un método estático seguimos la misma sintaxis de un método normal, solo agregamos la palabra
    // static después del modificador de acceso de la función.
    public static function obtenerEmpleado(){
        echo "Desde el método estático";
    }

    // Este método 
    public static function getNombre() {
        return self::$nombre;
    }
}

$oscar = new Empleado(
    "Oscar", // Aquí estamos asignando un valor a la variable estatica.
    "Alonso",
    "Gerencia de TI",
    "oalonso@mexoil.com",
    "104379"
);

$cesar = new Empleado(
    "Cesar", // Aquí volvemos a asginar un valor a la variable estatica.
    "Alonso",
    "Gerencia de TI",
    "oalonso@mexoil.com",
    "104379"
);


/**$nombre valdrá  en todas las variables y en la misma Clase lo que se le setteó por ultima ves,
 * es decir lo que se le setteo en la instancia $cesar
*/
echo "<pre>";
Empleado::obtenerEmpleado();
echo "<br>";
echo Empleado::getNombre();
echo "<br>";
echo $oscar::getNombre();
echo "<br>";
var_dump($oscar);
echo "</pre>";