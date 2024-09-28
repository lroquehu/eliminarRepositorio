<?php
    $host = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "eliminar";

    $conexion = new mysqli($host, $usuario, $password, $bd);
    if ($conexion->connect_error) {
        die("erro de conexion: " . $concexion->connect_error);
    } 
?>