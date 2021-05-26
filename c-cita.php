<?php

    //------primero la verificación de sesiones --------------------------
    include( "clases/Csesiones.php" );
    include( "clases/Mconsultas.php" );
    include( "clases/Vimprimir.php" );

    Csesiones::verificar_sesion();

    $r = Mconsultas::consultar_citas();
    $r = Vimprimir::organizar( $r );

    //-------------------------------------------------
    //Sección para mostrar la vista.
    $seccion = "v-cita.php";
    include( "v-plantilla.php" );