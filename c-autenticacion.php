<?php

    //------primero la verificación de sesiones --------------------------
    include( "clases/Csesiones.php" );
    Csesiones::iniciar_sesion();
    $_SESSION[ 'usuario' ] = "";

    //------------------------------------------------------------------
    //Sección para mostrar la vista.
    $seccion = "v-autenticacion.php";
    include( "v-plantilla.php" );