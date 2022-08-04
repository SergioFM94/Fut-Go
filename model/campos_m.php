<?php

    require_once "conexionBDD.php";

    function obtenerCampos(){
        $DB = crearConexion('futgo');
        $sql = "SELECT nombre, latitud, longitud FROM campos_futbol";

        $result = mysqli_query($DB, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }else {
            echo "No hay ningún campo de futbol.";
        }
        mysqli_close($DB);
    }
?>