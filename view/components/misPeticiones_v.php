<?php
    include_once "../../../controller/peticiones_c.php";
    function componenteMisPeticiones(){
        echo "
        <div class='componentePeticion'>
            <div class='contSolicitarPeticion'>\n
                <div class='containerPeticion'>
                    <h2>Solicitar nueva pista</h2>
                    <form action=' " .solicitarPeticion()."' method='POST'>
                        <label class='label'>Nombre de la pista</label><br>
                        <input type='text' class='inputText' name='nombre'><br>
                        <label class='label'>Latitud</label><br>
                        <input type'text' class='inputText' name='latitud'><br>
                        <label class='label'>Longitud</label><br>
                        <input type'text' class='inputText' name='longitud'><br>
                        <label class='label'>Provincia</label><br>
                        <select name='provincia' class='inputText' id='provincia'>
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
                        </select><br>
                        <input type='submit' class='inputSubmit' name='crearPeticion' value='SOLICITAR'>
                    </form>
                </div>
                <div class='containerAyuda'>
                    <h2>¿Necesitas ayuda?</h2>
                    <p class='parrafoAyuda'>
                        Si necesitas ayuda para obtener las coordenadas de la pista de futbol que deseas añadir,
                        simplemente ve a google Maps, pon el puntero en la ubicación que deseas solicitar
                        y se abrirá un desplegable con las coordenadas de la ubicación,
                        el primer parámetro es la latitud, el segundo la longitud.
                    </p>
                    <img src='../img/ayuda.png' class='imagenAyuda'>
                </div>
            </div>";
        $miUsuario = misPeticiones();
        if(is_string($miUsuario)){
            echo "
                <div class='peticionesPendientes'>
                    <h2>Mis peticiones pendientes</h2>
                    <div>
                        <p class='titulo'>No tienes peticiones pendientes</p>
                    </div>
                </div>
            </div>";
        }else{
            $fila = [];
            echo "
                <div class='peticionesPendientes'>
                    <h2>Mis peticiones pendientes</h2>
                    <table>\n
                        <tr>\n
                            <th class='titulo'> NOMBRE DEL CAMPO </th>\n
                            <th class='titulo'> LATITUD </th>\n
                            <th class='titulo'> LONGITUD </th>\n
                            <th class='titulo'> PROVINCIA </th>\n
                        </tr>\n";
            while ($fila = mysqli_fetch_assoc($miUsuario)){
                echo "  <tr>\n          
                            <th class='peticion'>". $fila["nombre"] . " </th>\n
                            <th class='peticion'>". $fila["latitud"] . " </th>\n
                            <th class='peticion'>". $fila["longitud"] . " </th>\n
                            <th class='peticion'>". $fila["provincia"] . " </th>\n
                        </tr>\n";}
            echo "</table>\n
                </div>
            </div>\n";
        }
    }
?>