<?php
require_once( "mpdf/mpdf.php" );

$html = '<h1>PDF desde CSS Bootstrap</h1>';
$html.='<table class="table table-bordered">';
$html.='
    <thead>
        <tr>
            <th>Datos</th>
            <th>Valor 1</th>
            <th>Valor 2</th>
            <th>Valor 3</th>
            <th>Valor 4</th>
        </tr>
    </thead>
    <tbody>
';
    for( $i=0; $i<100; $i++ )
    {
        $html.='
        <tr>
            <td>Valor de $i </td>
            <td> valor'.$i.'</td>
            <td> valor'.$i+1.'</td>
            <td> valor'.$i+2.'</td>
            <td> valor'.$i+3.'</td>
        </tr>
        ';
    }

$html.='
    </tbody>
</table>
    <h1>Hormiguita</h1>
    <img src="img/img.jpg" />
';

//Formato estandar de pdf 'c'
$mpdf = new mPDF('c');

$estilos = file_get_contents( "bootstrap/bootstrap.css" );
$mpdf->SetDisplayMode( 'fullpage' );

$mpdf->WriteHTML( $estilos, 1 );
$mpdf->WriteHTML( $html );
$mpdf->Output();
exit;
    