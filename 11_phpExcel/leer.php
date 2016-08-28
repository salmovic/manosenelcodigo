<?php
    require_once ( 'PHPExcel.php' );
    require_once ( 'PHPExcel/Reader/Excel5.php' );
    $objReader = new PHPExcel_Reader_Excel5();
    $objPHPExcel = $objReader -> load( 'reporte.xls' );
    $objPHPExcel -> setActiveSheetIndex( 0 );
    $filas = $objPHPExcel -> setActiveSheetIndex( 0 ) -> getHighestDataRow();

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Leero documento excel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h1>Creacion y reporte de un Excel</h1>
        <table class="table table-bordered">
            <p>Hay <?php echo $filas;?> filas en el excel.</p>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ( $i=1; $i<=$filas; $i++ )
                {
                    ?>
                    <tr>
                        <td> <?php echo $objPHPExcel -> getActiveSheet()
                                -> getCell( 'A'.$i ) ?> </td>
                        <td> <?php echo $objPHPExcel -> getActiveSheet()
                                -> getCell( 'B'.$i ) ?> </td>
                        <td> <?php echo $objPHPExcel -> getActiveSheet()
                                -> getCell( 'C'.$i ) ?> </td>
                        <td> <?php echo $objPHPExcel -> getActiveSheet()
                                -> getCell( 'D'.$i ) ?> </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>