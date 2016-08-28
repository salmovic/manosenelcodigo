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

if ( isset( $_POST['nombre'] ) )
{
    $u->update();
    header("Location: index.php?m=2");
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Editar Usuario</li>
    </ol>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Editar Usuario</h3>
        </div>
        <div class="panel-body">
            <!---->
            <form action="" method="post">
                <p>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" placeholder="Escriba su nombre" autofocus="true"
                           class="form-control" value="<?php echo $datos[0]->nombre; ?>">
                </p>
                <p>
                    <label for="email">E-Mail:</label>
                    <input type="text" name="email" placeholder="ejemplo@ejemplo.com"
                           class="form-control" value="<?php echo $datos[0]->correo; ?>">
                </p>
                <p>
                    <label for="telefono">Telefono:</label>
                    <input type="text" name="telefono" placeholder="+52 00-0000-00-00"
                           class="form-control" value="<?php echo $datos[0]->telefono; ?>">
                </p>
                <p>
                    <label for="fecha">Fecha:</label>
                    <input type="date" name="fecha" class="form-control" placeholder="fecha" value="<?php echo $datos[0]->fecha; ?>">
                </p>
                <p>
                    <input type="hidden" name="id" value="<?php echo $datos[0]->id; ?>">
                    <input type="submit" value="Enviar" class="btn btn-success">
                </p>
            </form>
        </div>  <!--End panel-body-->
    </div>
</div>
<script src="js/funciones.js"></script>
</body>
</html>