<?php
abstract class Conectar
{
    private $mysqli;
    public function conectar()
    {
        $this->mysqli = new mysqli( 'localhost', 'root', '', 'manosenelcodigo' );
        //$this->mysqli->select_db( "manosenelcodigo" );
        return $this -> mysqli;
    }
    public function setNames()
    {
        return $this -> mysqli -> query( "SET NAMES 'utf8'" );
    }
}