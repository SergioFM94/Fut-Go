<?php
    require "../../../controller/peticiones_c.php";

    function componentePeticiones(){
        if(usuarioAdministrador()){
            echo"
            <div>
                <h1>Administrar Peticiones</h1>
            ";
            $datos = consultarPeticiones();
            if(is_string($datos) || !$datos){
                echo "
                        <p class='sinPeticiones'>Enhorabuena, has gestionado todas las solicitudes.</p>
                    </div>";
            }else{
                echo "<table>\n
                        <tr>\n
                            <th class='titulo'>Solicitante</th>\n
                            <th class='titulo'>Nombre de la pista</th>\n
                            <th class='titulo'>Latitud</th>\n
                            <th class='titulo'>Longitud</th>\n
                            <th class='titulo'>Provincia</th>\n                            
                        </tr>\n";
                    while($fila = mysqli_fetch_assoc($datos)) {
                        echo "<tr class='trPeticion'>\n
                                <td class='peticion'>". $fila["solicitante"] ."</td>\n
                                <td class='peticion'>". $fila["nombre"] ."</td>\n
                                <td class='peticion'>". $fila["latitud"] ."</td>\n
                                <td class='peticion'>". $fila["longitud"] ."</td>\n
                                <td class='peticion'>". $fila["provincia"] ."</td>\n
                                <td>
                                    <form action='".rechazarPeticion()."' method='POST'>
                                        <input type='hidden' name='ID' value='". $fila["ID"] ."'>
                                        <button type='submit' class='boton_eliminar' name='rechazar'>RECHAZAR</button>
                                    </form>
                                </td>
                                <td>
                                    <form action='".aceptarPeticion()."' method='POST'>
                                        <input type='hidden' name='ID' value='". $fila["ID"] ."'>
                                        <button type='submit' class='boton_aceptar' name='aceptar'>ACEPTAR</button>
                                    </form>
                                </td>\n
                            </tr>\n";
                    }
                echo "</table>\n
                </div>";
            }
        }else{
            header("Location: home.php");
        }

        
    }
?>