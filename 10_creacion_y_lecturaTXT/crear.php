
<?php
/* Descargar zipfile: https://www.devco.net/code/zipfile.inc.txt */
//creamos un archivo txt de escritura
$archivo= fopen( "datos.txt", "w" );

//Agregando informacion al archivo txt
    for( $i=0; $i<10; $i++ )
    {
    fputs( $archivo, "Mexico ; Chile ; Venezuela ; Espania" );
    fputs( $archivo, "\n" );    
    }

//Cerramos el archivo
    fclose( $archivo );

//Comprimimos el archivo a .zip
require_once( "zipfile.php" );

$nombre="reporte_".date("h:i:s")."_".date("d-m-Y").".zip";
$zipfile=new zipfile();
$zipfile->add_file(implode("",file("datos.txt")),"datos.txt");

header("Content-type: application/octet-stream");
header("Content-disposition: attachment; filename=$nombre");

echo $zipfile->file();