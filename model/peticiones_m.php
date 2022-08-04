<?php

    require_once "conexionBDD.php";

    function consultarPeticiones(){
        $DB = crearConexion("futgo");
        $sql = "SELECT * FROM peticiones";

        $result = mysqli_query($DB, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }else {
            echo "";
        }
        mysqli_close($DB);
    }

    function borrarPeticion($id){
        $DB = crearConexion("futgo");
        $sql ="DELETE FROM peticiones WHERE ID = '". $id . "'";

        $result = mysqli_query($DB, $sql);

        if($result) {
            return $result;
        }else{
            printf("Conexión fallida%s\n", mysqli_error($DB));
            
        }
        mysqli_close($DB);
    }

    //función que genera la query, que introduce la petición en la tabla de campos, que finalmente se introducirán en el mapa.
    function insertarPeticion($id){
        $DB = crearConexion("futgo");
        $sql = "INSERT INTO campos_futbol (nombre, latitud, longitud, provincia) SELECT nombre, latitud, longitud, provincia FROM peticiones WHERE ID = '$id'";

        $result = mysqli_query($DB, $sql);

        if($result){
            return $result;
        }else{
            printf("Conexión fallida%s\n", mysqli_error($DB));
        }
    }

    //Función que nos crea un registro con una petición.
    function generarPeticion($solicitante, $nombre_peticion, $latitud, $longitud, $provincia){
        $DB = crearConexion("futgo");
        $sql = "INSERT INTO peticiones (solicitante, nombre, latitud, longitud, provincia) 
                VALUES ('" . $solicitante . "', '" . $nombre_peticion . "', '" . $latitud . "','" . $longitud . "','" . $provincia . "')";
        $result = mysqli_query($DB, $sql);
        if($result){
            return $result;
        }else{
            printf("Conexión fallida%s\n", mysqli_error($DB));
        }
    }

    function consultarMisPeticiones($cookieUsuario){
        $DB = crearConexion("futgo");
        $sql = "SELECT * FROM peticiones WHERE solicitante = '". $cookieUsuario ."'";

        $result = mysqli_query($DB, $sql);
        
        if(mysqli_num_rows($result) > 0) {
            return $result;
        }else{
            return "";
        }
        mysqli_close($DB);
    }
?>