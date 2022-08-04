<?php

    require "../../../model/peticiones_m.php";
    
    function misPeticiones(){
        if(isset($_COOKIE["usuario"])){
            $miUsuario = consultarMisPeticiones($_COOKIE["usuario"]);
        }
        return $miUsuario;
    }

    function solicitarPeticion(){
        if(isset($_POST['crearPeticion'])){
            generarPeticion($_COOKIE['usuario'],$_POST['nombre'],$_POST['latitud'],$_POST['longitud'],$_POST['provincia']);
        }
    }

    function rechazarPeticion(){
        if(isset($_POST['rechazar'])){
            $datos = consultarPeticiones();
            if(is_string($datos) || !$datos){
                echo $datos;
            }else{
                borrarPeticion($_POST['ID']);
                header("refresh: 0.015");
            }
        }
    }

    function aceptarPeticion(){
        if(isset($_POST['aceptar'])){
            $datos = consultarPeticiones();
            if(is_string($datos) || !$datos){
                echo $datos;
            }else{
                insertarPeticion($_POST['ID']);
                borrarPeticion($_POST['ID']);
                header("refresh: 0.15");
            }
        }
    }
?>