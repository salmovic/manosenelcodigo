<?php
require_once("clases/usuarios.php");
$mensaje='';
if(isset($_POST["correo"]))
{
    $u=new Usuarios();
    $datos= $u->getLogin($_POST["correo"],sha1($_POST["pass"]));
    if(sizeof($datos)==0)
    {
        $mensaje.='los datos ingresados no son correctos';
    }else
    {
        //echo $datos[0]->nombre;exit;
        $_SESSION["id"]=$datos[0]->id;
        $_SESSION["nombre"]=$datos[0]->nombre;
        header("Location: restringido1.php");
    }
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
            <form action="" method="post" name="form">
                <h1>Ingrese sus datos</h1>
                <?php
                if(!empty($mensaje))
                {
                    ?>
                    <div class="alert alert-danger"><?php echo $mensaje; ?></div>
                    <?php
                }
                ?>
                <p>
                    <label for="correo">E-Mail</label>
                    <input type="email" name="correo" value="<?php echo Helpers::set_value_input(array(),'correo','correo');?>" placeholder="E-Mail" autofocus="true" />
                </p>
                
                <p>
                    <label for="correo">Contraseña</label>
                    <input type="password" name="pass" value="<?php echo Helpers::set_value_input(array(),'pass','pass');?>" placeholder="Contraseña" />
                </p>
                <hr />
                <input type="submit" value="Enviar" />
                
            </form>
        </div>
       </div>
       
    </body>
    </html>
