<?php
class Padre 
{
    private $nombre;
    private $apellido;
    
    public function __construct($nom,$app)
    {
        $this->nombre= $nom;
        $this->apellido= $app;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
}

class Hija extends Padre
{
    public function __construct( $nom, $app )
    {
        parent::__construct( $nom, $app );
    }
}