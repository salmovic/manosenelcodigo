<?php
//include( "interfaces.php" );
require_once( "interfaces.php" );
/*
$p = new Padre( "Salvador", "Morales" );
echo $p->getNombre()." <br> ".$p->getApellido();
*/

$h = new Hija( "Salvador", "Morales" );
echo $h->getNombre();