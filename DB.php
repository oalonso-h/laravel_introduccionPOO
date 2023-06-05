<?php

class DB {
    protected $nombre;

    public function __construct( string $nombre ){
        $this->nombre = $nombre;
    }

    public function guardarInformacion() {
        echo "Almacenando..." . $this->nombre;
    }
}