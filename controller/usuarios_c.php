<?php
    require "../../../model/usuarios_m.php";

    function iniciarSesion(){
        //Se comprueba que el usuario existe, se inicia sesión y se almacena en una cookie.
        if(isset($_POST["email"],$_POST["password"])){
            if(comprobarLogin($_POST["email"],$_POST["password"])){
                setcookie("usuario", $_POST["email"],time() + 1600);
                header("Location: home.php");
            }else{
                echo "<p class='mensajeAlerta'>Usuario o Contraseña errónea</p>";
            }
        }
    }

    function miPerfil(){
        if(isset($_COOKIE["usuario"])){
            $miUsuario = consultarMiUsuario($_COOKIE["usuario"]);
        }
        return $miUsuario;
    }

    function modificarMiPerfil(){
        if(isset($_POST['modificar'])){
            $miUsuario = consultarMiUsuario($_COOKIE["usuario"]);
            $fila = mysqli_fetch_assoc($miUsuario);
            modificarMiUsuario($_POST['nombre'],$_POST['email'],$_POST['password'],$_POST['provincia_usuario'],$_POST['email']);
        }
    }

    function borrarCookieUsuario(){
        //Si la cookie existe cuando se nos redirige al menú de lógin, se borrará la misma para que se cierre la sesión.
        if(isset($_COOKIE["usuario"])){
            setcookie("usuario", "", - 1800);
        }
    }

    function comprobarCookieUsuario(){
        if(!isset($_COOKIE["usuario"])){
            header("Location: login.php");
        }
    }

    function usuarioAdministrador(){
        if(esAdministrador($_COOKIE["usuario"])){
            return true;
        }else{
            return false;
        }
    }

    function eliminarUsuario(){
        if(isset($_POST['borrar'])){
            $datos = consultarUsuarios();
            if(is_string($datos)){
                echo $datos;
            }else{
                borrarUsuario($_POST['id']);
                header("refresh: 0.25");
            }
        }
    }

    function registrarUsuario(){
        if(isset($_POST['nombre'],$_POST['email'],$_POST['password'],$_POST['provincia_usuario'])){
            crearUsuario($_POST['nombre'],$_POST['email'],$_POST['password'],$_POST['provincia_usuario']);
        }
    }

?>