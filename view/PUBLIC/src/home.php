<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--mi estilo CSS-->
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/style.css">
        <title>FUT!GO</title>
        <!--LEAFLET CSS-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin=""/>
        <!--LEAFLET JS-->
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
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
            require "../../../controller/campos_c.php";
            componenteNavBar();
            comprobarCookieUsuario();
        ?>
        <div class="container">
            <div id="map"></div>
        </div>
        <?php
            componenteFooter();
        ?>
        <script src="../js/map.js"></script>
    </body>
</html>