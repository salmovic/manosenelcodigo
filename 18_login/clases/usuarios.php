<?php
require_once ( "conectar.php" );
require_once( "helpers.php" );
class Usuarios extends Conectar
{
    private $db;
    public function __construct()
    {
        $this->db = parent::conectar();
        $this->setNames();
    }

    /**
     *Obtener todos los datos
     */
    public function getDatos()
    {
        $sql = "select 
                id, nombre, correo, telefono, fecha 
                from
                usuarios";
        $datos = $this->db->query( $sql );
        $arreglo = array();

        while ( $reg= $datos->fetch_object() )
        {
            $arreglo[] = $reg;
        }
        return $arreglo;
    }

    /**
     * Insertar datos
     */
    public function insert()
    {
        $sql = "INSERT INTO usuarios(id, nombre, correo, telefono, fecha)
            VALUES (0,'".$_POST['nombre']."','".$_POST['email']."','".$_POST['telefono']."','".$_POST['fecha']."')";
        $this->db->query( $sql );
    }

    /**
     * @param $id
     * @return array
     */
    public function getDatosById( $id )
    {
        $sql = "select 
                id, nombre, correo, telefono, fecha 
                from
                usuarios where id='".$id."'";

        $datos = $this->db->query( $sql );
        $arreglo = array();

        while ( $reg= $datos->fetch_object() )
        {
            $arreglo[] = $reg;
        }
        return $arreglo;
    }
    /**
     * Insertar datos
     */
    public function update()
    {
        $sql = "UPDATE usuarios 
        SET
        nombre='".$_POST['nombre']."',
        correo='".$_POST['email']."',
        telefono='".$_POST['telefono']."',
        fecha='".$_POST['fecha']."' 
        WHERE 
        id = '".$_POST['id']."'";

        $this->db->query( $sql );
    }
    public function delete()
    {
        $sql = "
         DELETE FROM usuarios
        WHERE 
        id = '".$_GET['id']."'";

        $this->db->query( $sql );
    }

}