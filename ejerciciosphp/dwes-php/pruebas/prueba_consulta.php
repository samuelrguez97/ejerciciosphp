<?php
$conexion = new mysqli('localhost', 'root', '', 'dwes');
$error = $conexion->connect_errno;
if ($error == null) {
    $resultado = $conexion->query('DELETE FROM dwes_tabla WHERE NOMBRE="PEPE"');
    if ($resultado) {
        print "<p>Se han borrado $conexion->affected_rows registros.</p>";
    }
    $conexion->close();
}
?>