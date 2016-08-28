<?php
require_once("clases/usuarios.php");
if(!isset($_SESSION["id"]))
{
    header("Location: index.php");
}
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>..:: Sistema de Control de acceso ::..</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>
    <body>
       
       <div class="container">
        <div class="row">
            <h1>Bienvenido a los contenidos restringidos</h1>
            <p>Hola <?php echo $_SESSION["nombre"]?></p>
            <p> <a href="salir.php">Salir</a> </p>
        </div>
       </div>
       
    </body>
    </html>
