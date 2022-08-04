<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestionar Peticiones</title>
        <link rel="stylesheet" href="../css/gestionarPeticiones.css">
        <link rel="stylesheet" href="../css/style.css">
        <!--fuente de google fonts: Bebas Neue-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <!--fuente de google fonts: VT323-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=VT323&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php 
            require "../../components/header_v.php";
            require "../../components/footer_v.php";
            include "../../components/listaPeticiones_v.php";
            componenteNavBar();
            comprobarCookieUsuario();
        ?>
        <div class='componentePeticiones'>
            <?php
                componentePeticiones();
            ?>
        </div>
        <?php   
            componenteFooter();
        ?>
    </body>
</html>