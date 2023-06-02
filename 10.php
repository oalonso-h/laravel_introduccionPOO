<?php
include 'includes/header.php';

// HERENCIA: EL PROBLEMA QUE SE SOLUCIONA ES LA REPETICIÓN DE CODIGO
class Persona {
    protected $nombre;
    protected $apellidos;
    protected $telefono;
    protected $email;
    
    public function __construct( string $nombre, string $apellidos, string $telefono, string $email ) {
        $this->nombre       = $nombre;
        $this->apellidos    = $apellidos;
        $this->telefono     = $telefono;
        $this->email        = $email;
    }

    public function getInformacion() {
        echo "Nombre: " . $this->nombre . " Apellidos: " . $this->apellidos . " E-mail: " . $this->email; 
    }

    public function getTelefono() {
        echo "El teléfono de " . $this->nombre . " es " . $this->telefono;
    }
}

// La clase Empleado hereda de la clase Persona, se indica con el "extends Persona" al lado del nombre de la clase.
class Empleado extends Persona {
    protected $codigo;
    protected $departamento;
    
    public function __construct( int $codigo, string $nombre, string $apellidos, string $telefono, string $email, string $departamento ) {
        parent::__construct($nombre, $apellidos, $telefono, $email);
        $this->codigo       = $codigo;
        $this->departamento = $departamento;
    }
}

// La clase Proveedor hereda de la clase Persona, se indica con el "extends Persona" al lado del nombre de la clase.
class Proveedor extends Persona {
    protected $empresa;
    
    public function __construct( string $nombre, string $apellidos, string $telefono, string $email, string $empresa ) {
        parent::__construct($nombre, $apellidos, $telefono, $email);
        $this->empresa  = $empresa;
    }

    public function getInformacion() {
        echo "Nombre: " . $this->nombre . " Apellidos: " . $this->apellidos . " E-mail: " . $this->email . " Empresa: " . $this->empresa; 
    }
}

$empleado = new Empleado(104379, "Oscar de Jesus", "Alonso", "55 80121036", "oalonso@mexoil.com", "Gerencia de TI");
$proveedor = new Proveedor("Cesar Armando", "Alonso", "112233456", "calonso@prov.com", "Efesto Co.");

echo "<pre>";
    $empleado->getInformacion();
    echo "<br>";
    $empleado->getTelefono();
    echo "<br>";
    var_dump($empleado);
    echo "<br>";
    $proveedor->getInformacion();
    echo "<br>";
    $proveedor->getTelefono();
    echo "<br>";
    var_dump($proveedor);
echo "</pre>";