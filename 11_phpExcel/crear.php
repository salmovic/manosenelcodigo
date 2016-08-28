<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 30/07/2016
 * Time: 11:47 AM
 */
require_once( "PHPExcel.php" );
$excel = new PHPExcel();

$excel -> getProperties()
       -> setTitle( "Excel" )
       -> setDescription( "Descripcion" );
//Inicializar la creacion del documento excel
$sheet = $excel->getActiveSheet();

//Titulo a nuestra hoja
$sheet -> setTitle( "Reporte" );

//Creamos las columnas del encabezado de nuestro excel
$sheet -> setCellValue( "A1", "ID" );
$sheet -> setCellValue( "B1", "Nombre" );
$sheet -> setCellValue( "C1", "E-Mail" );
$sheet -> setCellValue( "D1", "Telefono" );

//creamos las filas de registros de nuestro excel
for ( $i=2; $i<10; $i++ )
{
    $sheet -> setCellValue( "A".$i, $i );
    $sheet -> setCellValue( "B".$i, "Nombre_".$i );
    $sheet -> setCellValue( "C".$i, "E-mail_".$i );
    $sheet -> setCellValue( "D".$i, "Telefono_".$i );
}

//Creamos el archiv para la salida Excel
header( "Content-type: application/vnd.ms-excel" );
$nombre = "reporte_".date( "Y-m-d H:i:s" );
header( "Content-Disposition: attachment; filename=\"$nombre.xls\"" );
header( "Cache-Control: max-age=0" );

$writer = PHPExcel_IOFactory::createWriter( $excel, "Excel5" );
$writer -> save( "php://output" );