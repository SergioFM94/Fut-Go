<?php

    require "conexionBDD.php";

    function comprobarLogin($email, $password){
        $DB = crearConexion("futgo");
        $sql = "SELECT * from usuarios WHERE email = '" . $email ."' AND password = '". $password ."'";

        $result = mysqli_query($DB, $sql);

        if(mysqli_num_rows($result) > 0){
            return true;
        }else {
            return false;
        }
        mysqli_close($DB);
    }

    function crearUsuario($nombre, $email, $password, $provincia_usuario){

        $DB =crearConexion("futgo");

        $expr_regular_usuario = "/[a-z0-9]{4,15}$/";
        $expr_regular_contrasena = "/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,16}$/";
        $expr_regular_email = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";

        $sql ="INSERT INTO usuarios(nombre, email, password, provincia_usuario)
              VALUES('$nombre','$email','$password','$provincia_usuario')";

        $sql3 = "SELECT * FROM usuarios WHERE email = '". $email ."'";
        $result_mail = mysqli_query($DB, $sql3);

        //Lógica que comprueba que el usuario a registrar cumple una serie de parámetros.
        if(!preg_match($expr_regular_usuario, $nombre)){
            echo"<p class='mensajeAlerta'>El usuario tiene que tener entre 4-15 caracteres.</p>";
            mysqli_close($DB);
        }else if(!preg_match($expr_regular_email, $email)){
            echo"<p class='mensajeAlerta'>El mail introducido no es válido.</p>";
            mysqli_close($DB);
        }else if(mysqli_num_rows($result_mail) > 0){
            echo"<p class='mensajeAlerta'>El mail indicado está en uso.</p>";
            mysqli_close($DB);
        } else if(!preg_match($expr_regular_contrasena, $password)) {
            mysqli_close($DB);
            echo"<p class='mensajeAlerta'>La contraseña tiene que tener entre 6-12 caracteres. Una mayúscula y un dígito.</p>";
        }else {
            $exec = mysqli_query($DB,$sql);
            if($exec){
                echo("<p class='mensajeAlerta'>Usuario registrado satisfactoriamente</p>");
                return $exec;
            }else{
                printf("Conexión fallida%s\n", mysqli_error($DB));
            }
            mysqli_close($DB);
        }
    }

    function consultarUsuarios(){
        
        $DB = crearConexion("futgo");
        $sql = "SELECT * FROM usuarios WHERE admin != 1";

        $result = mysqli_query($DB, $sql);

        if(mysqli_num_rows($result) > 0) {
            return $result;
        }

        mysqli_close($DB);
    }

    function esAdministrador($email){
        $DB = crearConexion("futgo");
        $sql = "SELECT * FROM usuarios WHERE email = '" . $email ."' AND admin = 1";

        $result = mysqli_query($DB, $sql);
            
        if(mysqli_num_rows($result) > 0){
            return true;
        }else {
            return false;
        }
        mysqli_close($DB);
    }

    function consultarMiUsuario($cookieUsuario){
        $DB = crearConexion("futgo");
        $sql = "SELECT * FROM usuarios WHERE email = '". $cookieUsuario ."'";

        $result = mysqli_query($DB, $sql);
        
        if(mysqli_num_rows($result) > 0) {
            return $result;
        }else{
            return false;
        }
        mysqli_close($DB);
    }

    function modificarMiUsuario($nombre, $email, $password, $provincia_usuario, $cookieUsuario){
        $DB = crearConexion("futgo");

        $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email', password = '$password', provincia_usuario = '$provincia_usuario' WHERE usuarios.email = '$cookieUsuario'";
        $sql2 = "SELECT * FROM usuarios WHERE email = '". $cookieUsuario ."'";

        $expr_regular_usuario = "/[a-z0-9]{4,15}$/";
        $expr_regular_contrasena = "/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,16}$/";
        $expr_regular_email = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";

        $result_mail = mysqli_query($DB, $sql2);
        
        if(!preg_match($expr_regular_email, $email)){
            mysqli_close($DB);
            echo "<p>El email introducido no es válido</p>";
            echo "<script>console.log('Email no válido')</script>";
        }else if(mysqli_num_rows($result_mail) > 1 && $email != $cookieUsuario){
            echo "<p>El mail indicado está en uso</p>";
            echo "<script>console.log('Email en uso')</script>";
            mysqli_close($DB);
        } else if(!preg_match($expr_regular_contrasena, $password)) {
            mysqli_close($DB);
            echo "<script>console.log('La contraseña debe tener entre 6-16 caracteres. una mayuscula y un dígito')</script>";
            echo"<p>La contraseña debe tener entre 6-16 caracteres. una mayuscula y un dígito.</p>";
        }else {
            
            $exec = mysqli_query($DB,$sql);
            
            if($exec){
                echo "<script>console.log('Se ejecuta la función')</script>";
                echo "<script>console.log('".$cookieUsuario ."')</script>";
                return $exec;
            } else {
                printf("Conexión fallida%s\n", mysqli_error($DB));
            }
            mysqli_close($DB);
        }
    }

    function borrarUsuario($id){
        $DB = crearConexion("futgo");
        $sql ="DELETE FROM usuarios WHERE id = '". $id ."'  ";

        $result = mysqli_query($DB, $sql);

        if($result) {
            return $result;
        }else{
            printf("Conexión fallida%s\n", mysqli_error($DB));
            
        }
        
        mysqli_close($DB);
    }
    
?>