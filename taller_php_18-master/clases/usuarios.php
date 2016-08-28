<?php
require_once("conectar.php");
require_once("helpers.php");
class Usuarios extends Conectar
{
    private $db;
    
    public function __construct() 
    {
        $this->db=parent::conectar();
        parent::setNames();   
    }
    public function getDatos()
    {
        $sql="
            select
            id,nombre,correo,telefono,fecha
            from
            usuarios;
            ";
       $datos= $this->db->query($sql);
       $arreglo=array();
       while($reg=$datos->fetch_object())
       {
            $arreglo[]=$reg;
       }  
       return $arreglo;   
    }
    public function getLogin($correo,$pass)
    {
        $sql="
            select
            id,nombre,correo,pass
            from
            usuarios
            where
            correo='".$correo."'
            and
            pass='".$pass."';
            ";
       $datos= $this->db->query($sql);
       $arreglo=array();
       while($reg=$datos->fetch_object())
       {
            $arreglo[]=$reg;
       }  
       return $arreglo;   
    }

}
