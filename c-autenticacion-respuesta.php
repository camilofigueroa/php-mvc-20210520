<?php

    include( "clases/Mconsultas.php" );
    include( "clases/Vimprimir.php" );
    include( "clases/Csesiones.php" );
    
    Csesiones::iniciar_sesion();

    $usuario = $_POST[ 'usuario' ];
    $clave = $_POST[ 'clave' ];

    //echo $usuario." ".$clave;

    $r = Mconsultas::autenticacion( $usuario, $clave );
    $r = Vimprimir::imprimir( $r, 1 ); 

    //Imprimir si estamos autenticados o no.
    if( $r."" == "1" )
    {
        $_SESSION[ 'usuario' ] = $usuario;
        header( "location: c-inicio.php" );

    }else{
            header( "location: c-autenticacion.php" );
        }