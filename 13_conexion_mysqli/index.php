<?php
require_once ( "clases/usuarios.php" );
$u = new Usuarios();
$datos = $u->getDatos();

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
        <div class="panel panel-primary">
            <div class="panel-heading">

                <?php
                if (isset( $_GET["m"] ) )
                {
                    switch ( $_GET["m"] )
                    {
                        case 1:
                            ?>
                            <div class="alert alert-success" aria-hidden="true">
                                El registro se ha ingresado exitosamente.
                            </div>
                            <?php
                            break;
                        case 2:
                            ?>
                            <div class="alert alert-success" aria-hidden="true">
                                El registro se ha modificado exitosamente.
                            </div>
                            <?php
                            break;
                        case 3:
                            ?>
                            <div class="alert alert-success" aria-hidden="true">
                                El registro se ha eliminado exitosamente.
                            </div>
                            <?php
                            break;
                    }
                }
                ?>

                <h3 class="panel-title">Listado de Usuarios #manosenelcodigo</h3>
            </div>
            <div class="panel-body">
                <p>
                    <a href="agregar.php" class="btn btn-success"><span class="glyphicon glyphicon-plus">Agregar</span></a>
                </p>
                <table class="table table-border">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>E-Mail</th>
                        <th>Telefono</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ( $datos as $dts )
                        {
                            ?>
                            <tr>
                                <td><?php echo $dts->id; ?></td>
                                <td><?php echo $dts->nombre; ?></td>
                                <td><?php echo $dts->correo; ?></td>
                                <td><?php echo $dts->telefono; ?></td>
                                <td><?php echo Helpers::fecha($dts->fecha)?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $dts->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" ></span></a>
                                    <a href="javascript:void(0);" onclick="eliminar( 'eliminar.php?id=<?php echo $dts->id; ?>' )" class="btn btn-success">
                                        <span class="glyphicon glyphicon-trash" ></span></a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/funciones.js"></script>
</body>
</html>