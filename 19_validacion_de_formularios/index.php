
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validar Formulario PHP</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>    
    <div class="container">
        <div class="row">
           <h1>Validacion de formularios con PHP</h1>
            <?php
                if($mensaje!='')
                {
                    ?>
                    <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <?php echo $mensaje?></div>
                    <?php
                }
                ?>
            <form action="" name="form" method="post">
               
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" autofocus='true' value="<?php echo set_value_input(array(),'nombre','nombre')?>">
                </div>
                
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="type" name="email" class="form-control" value="<?php echo set_value_input(array(),'email','email')?>">
                </div>
                
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="tell" class="form-control" value="<?php echo set_value_input(array(),'tell','tell')?>">                    
                </div>
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <select name="pais" class="form-control">
                        <option value="0" <?php echo set_value_select(array(),'pais','pais','0')?>>Seleccione.....</option>
                        <option value="1" <?php echo set_value_select(array(),'pais','pais','1')?>>Chile</option>
                        <option value="2" <?php echo set_value_select(array(),'pais','pais','2')?>>Bolivia</option>
                        <option value="3" <?php echo set_value_select(array(),'pais','pais','3')?>>Venezuela</option>
                        <option value="4" <?php echo set_value_select(array(),'pais','pais','4')?>>Colombia</option>
                        <option value="5" <?php echo set_value_select(array(),'pais','pais','5')?>>Perú</option>
                    </select>
                </div>
                <hr />
                
                <input type="hidden" name="grabar" value="si" />
                <input type="submit" class="btn btn-success" value="Enviar" />
                
            </form>
        </div>
    </div>
    
    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.js"></script>
</body>
</html>