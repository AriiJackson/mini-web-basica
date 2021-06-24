<?php
    $host = "localhost";
    $basededatos = "portafolio";
    $usuariodb = "root";
    $clavedb = "";

    $tabla_db = "contacto";

    $conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos);

    if($conexion->connect_errno){
        echo "Error al conectar con la base de datos";
        exit();
    }
?>