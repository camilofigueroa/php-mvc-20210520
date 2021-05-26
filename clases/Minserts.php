<?php

    include( "clases/Mconexion.php" );

    class Minserts extends Mconexion
    {
        public static function insertar_cita( $documento )
        {
            $salida = "";

            $conexion = self::conectar();
     
            //Esta clase es del modelo.
            $sql  = " INSERT INTO tb_citas_medicas ( id_cita_medica, fecha_cita, documento ) ";
            $sql .= " VALUES( NULL, NOW(), '$documento' );	";
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

            return $salida;
        }
    }
    