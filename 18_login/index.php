<?php
require_once ( "clases/usuarios.php" );
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
</head>
<body>
<div class="container">
    <div class="row">
        <form action="" name="form" method="post">
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" class="form-control" name="correo" value="<?php Helpers::set_value_input(array(),'correo','correo'); ?>">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="text" class="form-control" name="pass" value="<?php Helpers::set_value_input(array(),'pass','pass'); ?>">
            </div>
            <div class="form-control">
                <input type="submit">
            </div>
            
        </form>
    </div>
</div>
</body>
</html>