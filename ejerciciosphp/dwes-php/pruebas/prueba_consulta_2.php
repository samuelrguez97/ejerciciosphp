<?php
$conexion = new mysqli('localhost', 'root', '', 'dwes');
$error = $conexion->connect_errno;
if ($error == null) {
    $resultado = $conexion->query("SELECT CLAVE, NOMBRE, TELEFONO FROM dwes_tabla");
    if ($resultado) {
        $reg = $resultado->fetch_array();
        while ($reg != null){
            print"<p> Código: ". $reg['CLAVE'];
            print " *** Nombre: ". $reg['NOMBRE'] .":-:". $reg['TELEFONO'] . " </p>";
            $reg = $resultado->fetch_array();
        }
    }
    $resultado->close();
    $conexion->close();
}
else{
    echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}
?>