<?php
$conexion= new mysqli ('localhost', 'root', '', 'dwes');
$error = $conexion->connect_errno;
if ($error == null) {
    $peticion = "SELECT NOMBRE, TELEFONO FROM dwes_tabla WHERE CLAVE BETWEEN ? AND ?";
    if ($resultado = $conexion->prepare($peticion)) {
        // si la peticion se ha preparado correctamente $resultado==true
        // Ligamos las variables y ejecutamos la petición
        $ini = 2;
        $fin = 4;
        $resultado->bind_param("ii",$ini, $fin);
        $resultado->execute();
        //Ligar el resultado y recuperar los datos
        $resultado->bind_result($nombre, $telefono);
        while ($resultado->fetch()){
            print"<p> Datos de ". $ini ." - " . $nombre . " ". $telefono .
            "</p>";
            $ini++;
        }
        $resultado->close();
    }else
        print "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}
?>