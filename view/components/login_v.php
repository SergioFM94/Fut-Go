<?php
    require "../../../controller/usuarios_c.php";
    
    function componentLogin(){
        echo "
        <div class='containerLogin'>
            <div class='login'>
                <div class='divLogo'>
                    <h1 class='logo'>FUT!GO</h1>
                </div>
                <form action='login.php' method='POST'>
                    <label class='label'>Email</label>
                    <input type='text' class='inputText' name='email'><br>
                    <label class='label'>Contraseña</label>
                    <input type='password' class='inputText' name='password'><br>
                    ";
        borrarCookieUsuario();
        iniciarSesion();
        echo"
                    <input type='submit' class='inputSubmit' value='INICIAR SESIÓN'>
                </form>
                <p id='pNuevoUsuario'><a href='registro.php' id='nuevoUsuario'>¿Nuevo Usuario?</a></p>
            </div>
        </div>";
    }
?>