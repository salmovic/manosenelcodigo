<?php
require_once( "mpdf/mpdf.php" );

$html = '';
$html.='<table border=1>';
for( $i=0; $i<100; $i++ )
{
    $html.='
    <tr>
        <td> Valor de $i es= </td>
        <td>'.$i.'</td>
    </tr>
    ';
}
$html.='</table>';
//Formato estandar de pdf 'c'
$mpdf = new mPDF('c');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
    