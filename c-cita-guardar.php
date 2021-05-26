<?php

    include( "clases/Minserts.php" );
    //include( "clases/Vimprimir.php" );
    //include( "clases/Csesiones.php" );

    //Csesiones::verificar_sesion();

    $documento = $_POST[ 'documento' ];
    Minserts::insertar_cita( $documento );