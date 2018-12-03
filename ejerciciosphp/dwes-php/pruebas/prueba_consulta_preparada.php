<?php
$conexion= new mysqli ('localhost', 'root', '', 'dwes');
$error = $conexion->connect_errno;
if ($error == null) {
    $peticion = "UPDATE dwes_tabla SET NOMBRE=?, TELEFONO=? WHERE CLAVE=?";
    if ($resultado = $conexion->prepare($peticion)) {
        // si la peticion se ha preparado correctamente $resultado==true
        // Creamos las variables
        $clave = 1;
        $nom = "Juan";
        $tel = 159753456;
        // Ligamos las variables y ejecutamos la petición
        $resultado->bind_param("sii", $nom, $tel, $clave);
        $resultado->execute();
        // Ya que tenemos los parámetros ligados, podemos simplemente cambiar
        // los valores y ejecutarla de nuevo
        $clave = 2;
        $nom = "Margarita";
        $tel = 456789123;
        $resultado->execute();
        //ver información sobre la última consulta realizada
        //printf("%s\n", $conexion->info);
        // Y ahora cerramos el resultado
        $resultado->close();
    }
    $conexion->close();
}else{
    print "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}
?>