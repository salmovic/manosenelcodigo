<?php
$doc=new DOMDocument();
$doc->load("prueba.xml");
$personas=$doc->getElementsByTagName("personas");
//print_r($persona);exit;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Creación y lectura de reporte de un XML</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <h1>Creación y lectura de reporte de un XML</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>E-Mail</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($personas as $persona)
        {
            $id=$persona->getElementsByTagName("id_persona");
            $id_persona=$id->item(0)->nodeValue;

            $name=$persona->getElementsByTagName("nom");
            $nom=$name->item(0)->nodeValue;

            $email=$persona->getElementsByTagName("correo");
            $correo=$email->item(0)->nodeValue;
            ?>
            <tr>
                <td><?php echo $id_persona?></td>
                <td><?php echo $nom?></td>
                <td><?php echo $correo?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>