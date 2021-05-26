<?php

    //------primero la verificación de sesiones --------------------------
    include( "clases/Csesiones.php" );
    Csesiones::verificar_sesion();

    //-------------------------------------------------
    //Sección para mostrar la vista.
    $seccion = "v-contactos.php";
    include( "v-plantilla.php" );