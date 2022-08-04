<?php
    require_once "../../../controller/usuarios_c.php";


    //Función que generará la vista del menú de navegación, en función de si el usuario es o no administrador.
    function componenteNavBar(){
        if(usuarioAdministrador()){
            echo "
                <header>\n
                    <nav class='containerNav'>\n
                        <div id='toggleMenu' class='toggleMenu'>
                            <img src='../img/expand_ico.png'/>
                        </div>
                        <ul id='mainMenu' class='mainMenu'>                            
                            <li class='mainMenuItem divEnlacesNav'>
                            </li>
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/home.php' class='logoNav'>FUT!GO</a>
                            </li>
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/home.php'>MAPA</a>\n
                            </li>
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/miPerfil.php'>MI PERFIL</a>\n
                            </li>    
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/misPeticiones.php'>SOLICITAR PISTA</a>\n
                            </li>
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/gestionarPeticiones.php'>GESTIONAR SOLICITUDES</a>\n
                            </li>
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/gestionarUsuarios.php'>GESTIONAR USUARIOS</a>\n
                            </li>
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/login.php' class='salirNav'>SALIR</a>\n
                            </li>
                        </ul>
                    </nav>\n
                </header>\n
                <script src='../js/main.js'></script>";
        }else{
            echo "
            <header>\n
                    <nav class='containerNav'>\n
                        <div id='toggleMenu' class='toggleMenu'>
                            <img src='../img/expand_ico.png'/>
                        </div>
                        <ul id='mainMenu' class='mainMenu'>
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/home.php' class='logoNav'>FUT!GO</a>
                            </li>
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/home.php'>MAPA</a>\n
                            </li>
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/miPerfil.php'>MI PERFIL</a>\n
                            </li>    
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/misPeticiones.php'>SOLICITAR PISTA</a>\n
                            </li>
                            <li class='mainMenuItem divEnlacesNav'>
                                <a href='../src/login.php' class='salirNav'>SALIR</a>\n
                            </li>
                        </ul>
                    </nav>\n
            </header>\n
            <script src='../js/main.js'></script>";
        }
        
    }
?>