<?php
    require_once "../../../model/campos_m.php";

    function mostrarCampos(){
        
        header('Content-Type: application/json');
        $datos = obtenerCampos();
        $camposData = array();
        while($row = mysqli_fetch_assoc($datos)){
            $camposData["campos"][] = $row;
        }
        echo json_encode($camposData);
    }
?>