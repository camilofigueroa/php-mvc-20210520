<?php

    include( "clases/Mconexion.php" );

    class Mconsultas extends Mconexion
    {
        static function consultar_personas()
        {
            $conexion = self::conectar();
     
            //Esta clase es del modelo.
            $sql = "SELECT * FROM tb_personas";
            //echo $sql;
            $resultado = $conexion->query( $sql );

            return $resultado;
        }

        static function consultar_persona_nombre( $nombre )
        {
            $conexion = self::conectar();
     
            //Esta clase es del modelo.
            $sql = "SELECT * FROM tb_personas WHERE nombre LIKE '%$nombre%'";
            //echo $sql;
            $resultado = $conexion->query( $sql );

            return $resultado;
        }

        /**
         * Trae o muestra las personas que no tienen asignadas citas médicas.
         * 
         */
        static function consultar_citas_medicas()
        {
            $conexion = self::conectar();
     
            //Esta clase es del modelo.
            $sql  = " SELECT * ";
            $sql .= " FROM tb_personas ";
            $sql .= " WHERE documento not in ";
            $sql .= " ( SELECT documento FROM tb_citas_medicas ) ";
            //echo $sql;
            $resultado = $conexion->query( $sql );

            return $resultado;
        }

        /**
         * Trae o muestra las citas médicas.
         * 
         */
        static function consultar_citas()
        {
            $conexion = self::conectar();
     
            //Esta clase es del modelo.
            $sql  = " SELECT * ";
            $sql .= " FROM tb_citas_medicas ORDER BY fecha_cita DESC ";
            //echo $sql;
            $resultado = $conexion->query( $sql );

            return $resultado;
        }

        static function autenticacion( $documento, $clave )
        {              
            $conexion = self::conectar();
        
            //Esta clase es del modelo.
            $sql  = " SELECT 1 ";
            $sql .= " FROM tb_personas ";
            $sql .= " WHERE documento = '$documento' ";
            $sql .= " AND clave = '$clave' ";
            //echo $sql;
            $resultado = $conexion->query( $sql );

            return $resultado;
        }

    }
    