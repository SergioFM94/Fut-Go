<?php

    function componenteMiPerfil(){
        $miUsuario = miPerfil();
        $fila = [];
        echo "<h2>MIS DATOS</h2>";
        while ($fila = mysqli_fetch_assoc($miUsuario)){
            echo "<table class='tablaPerfil'>\n
                            <tr>\n
                                <th class='fila'> NOMBRE DE USUARIO </th>\n
                                <th class='valor'>". $fila["nombre"] . " </th>\n
                            </tr>\n
                            <tr>\n
                                <th class='fila'> EMAIL </th>\n
                                <th class='valor'>". $fila["email"] . " </th>\n
                            </tr>\n
                            <tr>\n
                                <th class='fila'> CONTRASEÑA </th>\n
                                <th class='valor'>******** </th>\n
                            </tr>\n
                            <tr>\n
                                <th class='fila'> PROVINCIA </th>\n
                                <th class='valor'>". $fila["provincia_usuario"] . " </th>\n
                            </tr>\n";
        }
        echo "</table>\n";
    }
?>