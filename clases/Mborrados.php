<?php

    include( "clases/Mconexion.php" );

    class Mborrados extends Mconexion
    {
        public static function borrar_cita( $id_cita_medica )
        {
            $salida = "";

            $conexion = self::conectar();
     
            //Esta clase es del modelo.
            $sql  = " DELETE FROM tb_citas_medicas WHERE id_cita_medica = '$id_cita_medica' ";
            //echo $sql;
            $resultado = $conexion->query( $sql );

            if( mysqli_affected_rows( $conexion ) > 0 )
            {
                //echo "Tus datos se guardaron";
                header( "location: c-cita.php" );

            }else{
                    //echo "Tus datos no se guardaron";
                    header( "location: c-cita.php" );
                }
        }
    }
    