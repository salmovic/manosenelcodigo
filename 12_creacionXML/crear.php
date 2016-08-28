<?php
    /**
     * Created by PhpStorm.
     * User: hp
     * Date: 30/07/2016
     * Time: 04:17 PM
     */
    $datos = array();
    $datos[] = array
    (
        "id" => "1",
        "nombre" => "Paulina",
        "correo" => "Puulina@tuchi.com",
    );
    $datos[] = array
    (
        "id" => "2",
        "nombre" => "Paulina 1",
        "correo" => "Puulina@tuchi.com",
    );
    $datos[] = array
    (
        "id" => "3",
        "nombre" => "Paulina 2",
        "correo" => "Puulina@tuchi.com",
    );
    //Instancia de la clase dondocument
    $doc = new DOMDocument();
    $doc -> formatOutput = true;
    $r = $doc -> createELement( "usuarios" );
    $doc -> appendChild( $r );
    //generar las estructuras dinamicas
    foreach ( $datos as $dato )
    {
        //ID
        $p = $doc -> createElement( "personas" );
        $id = $doc -> createElement( "id" );
        $id -> appendChild( $doc ->createTextNode( $dato[ "id" ]) );
        $p -> appendChild( $id );
        //nombre
        $nombre = $doc -> createElement( "nombre" );
        $nombre -> appendChild( $doc ->createTextNode( $dato[ "nombre" ]) );
        $p -> appendChild( $nombre );
        //correo
        $email = $doc -> createElement( "correo" );
        $email -> appendChild( $doc ->createTextNode( $dato[ "correo" ]) );
        $p -> appendChild( $email );

        $r -> appendChild( $p );
    }

    echo $doc -> saveXML();