<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leero archivo txt</title>
</head>
<body>
    <?php
        $datos = file( "datos.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );
        foreach( $datos as $d )
        {
            $campos = explode( ';', $d );
            foreach( $campos as $c )
            {
                echo $c."<br>";
            }
            echo "<hr>";
        }
    ?>
</body>
</html>