<?php
    $conexion = new mysqli('localhost', 'root', '', 'dwes');
    echo $conexion->server_info;
    $error = $conexion->connect_errno;
    if ($error != null) {
        echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
        exit();
    }

?>