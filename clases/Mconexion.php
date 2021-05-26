<?php
    //Modelo

    class Mconexion
    {
        static function conectar()
        {
            return mysqli_connect( "localhost", "root", "", "bd_pruebas" );
        }
    }
    