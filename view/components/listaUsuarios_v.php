<?php

    function componenteUsuarios(){
        if(usuarioAdministrador()){
            $datos = consultarUsuarios();
            echo"
            <div>
                <h1>Administrar Usuarios</h1>
            ";
            if(is_string($datos) || !$datos){
                echo "<p class='sinUsuarios'>
                        No hay ningún usuario registrado
                    </p>
                </div>";
            }else{
                echo "<table>\n
                        <tr>\n
                            <th class='titulo'>Nombre</th>\n
                            <th class='titulo'>Email</th>\n
                            <th class='titulo'>Password</th>\n
                            <th class='titulo'>Provincia</th>\n
                        </tr>\n";
    
                while($fila = mysqli_fetch_assoc($datos)) {
                    echo "<tr>\n
                            <td class='usuario'>". $fila["nombre"] ."</td>\n
                            <td class='usuario'>". $fila["email"] ."</td>\n
                            <td class='usuario'>". $fila["password"] ."</td>\n
                            <td class='usuario'>". $fila["provincia_usuario"] ."</td>\n
                            <td>
                                <form action='".eliminarUsuario()."' method='POST'>
                                    <input type='hidden' name='id' value='". $fila["id"] ."'>
                                    <button type='submit' class='boton_eliminar' name='borrar'>ELIMINAR</button>
                                </form>
                            </td>
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