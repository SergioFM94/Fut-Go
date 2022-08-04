<?php

    function crearConexion($database) {
        $host = "localhost";
        $user = "root";
        $password = "";

        $conexion = mysqli_connect($host,$user,$password, $database);

        if($conexion) {
            return $conexion;
        } else {
            echo "Error al conectarse a la base de datos";
        }
        
    }

?>