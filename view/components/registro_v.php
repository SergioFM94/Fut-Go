<?php
    require "../../../controller/usuarios_c.php";

    function componentRegistro(){
        echo "
            <div class='containerRegistro'> 
            <div class=registro>
                <div class='divLogo'>
                    <h1 class='logo'>FUT!GO</h1>
                </div>
                <form action='registro.php' method='POST'>
                    <label class='label'>Nombre de Usuario</label>
                    <input type=text' class='inputText' name='nombre'><br>
                    <label class='label'>Email</label>
                    <input type='text' class='inputText' name='email'><br>
                    <label class='label'>Contraseña</label>
                    <input type='password' class='inputText' name='password'><br>
                    <label class='label'>Provincia</label>
                    <select name='provincia_usuario' class='inputText' id='provincia'>
                        <option value='Albacete'>Albacete</option>
                        <option value='Alicante'>Alicante</option>
                        <option value='Almeria'>Almeria</option>
                        <option value='Álava'>Álava</option>
                        <option value='Asturias'>Asturias</option>
                        <option value='Ávila'>Ávila</option>
                        <option value='Badajoz'>Badajoz</option>
                        <option value='Baleares'>Baleares</option>
                        <option value='Barcelona'>Barcelona</option>
                        <option value='Burgos'>Burgos</option>
                        <option value='Cáceres'>Cáceres</option>
                        <option value='Cádiz'>Cádiz</option>
                        <option value='Cantabria'>Cantabria</option>
                        <option value='Castellón'>Castellón</option>
                        <option value='Ciudad Real'>Ciudad Rea</option>
                        <option value='Córdoba'>Córdoba</option>
                        <option value='Coruña, A'>Coruña, A</option>
                        <option value='Cuenca'>Cuenca</option>
                        <option value='Gipuzkoa'>Gipuzkoa</option>
                        <option value='Girona'>Girona</option>
                        <option value='Granada'>Granada</option>
                        <option value='Guadalajara'>Guadalajara</option>
                        <option value='Huelva'>Huelva</option>
                        <option value='Huesca'>Huesca</option>
                        <option value='Jaén'>Jaén</option>
                        <option value='León'>León</option>
                        <option value='Lleida'>Lleida</option>
                        <option value='Lugo'>Lugo</option>
                        <option value='Madrid'>Madrid</option>
                        <option value='Málaga'>Málaga</option>
                        <option value='Murcia'>Murcia</option>
                        <option value='Navarra'>Navarra</option>
                        <option value='Ourense'>Ourense</option>
                        <option value='Palencia'>Palencia</option>
                        <option value='Palmas, Las'>Palmas, Las</option>
                        <option value='Pontevedra'>Pontevedra</option>
                        <option value='Rioja, La'>Rioja, La</option>
                        <option value='Salamanca'>Salamanca</option>
                        <option value='Santa Cruz de Tenerife'>Santa Cruz de Tenerife</option>
                        <option value='Segovia'>Segovia</option>
                        <option value='Sevilla'>Sevilla</option>
                        <option value='Soria'>Soria</option>
                        <option value='Tarragona'>Tarragona</option>
                        <option value='Teruel'>Teruel</option>
                        <option value='Toledo'>Toledo</option>
                        <option value='Valencia'>Valencia</option>
                        <option value='Valladolid'>Valladolid</option>
                        <option value='Vizcaya'>Vizcaya</option>
                        <option value='Zamora'>Zamora</option>
                        <option value='Zaragoza'>Zaragoza</option>
                        <option value='Ceuta'>Ceuta</option>
                        <option value='Melilla'>Melilla</option>
                    </select><br>";
        registrarUsuario();
        echo "
                    <input type='submit' class='inputSubmit' value='REGISTRAME'>
                </form>
                <p>
                    <a href='login.php' id='usuarioRegistrado'>¿Ya eres usuario?</a>
                </p>
            </div>
        </div>";
    }
?>