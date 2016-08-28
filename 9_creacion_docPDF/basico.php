<?php
require_once( "mpdf/mpdf.php" );

$html = '<h1>Hola Mundo</h1>';
//Formato estandar de pdf 'c'
$mpdf = new mPDF('c');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
    