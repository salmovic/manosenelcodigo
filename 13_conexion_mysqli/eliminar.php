<?php
require_once ( "clases/usuarios.php" );
$u = new Usuarios();
//validar que la url venga con datos
if(!isset($_GET["id"]) or !is_numeric($_GET["id"]))
{

}
$datos = $u->getDatosById( $_GET["id"] );
//validar si el id existe en la base de datos

if (sizeof( $datos )==0 )
{
    die("Error 404");
}
$u->delete();
header("Location: index.php?m=3");
?>
