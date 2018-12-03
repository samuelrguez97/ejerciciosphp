<?php
include("../../cabecera_html.php");

// Ejercicio 2
echo "<p>Ejercicio 2</p>";
$conexion = new mysqli('localhost', 'root', '', 'tienda');
$error = $conexion->connect_errno;
if ($error == null) {
    $resultado = $conexion->query("SELECT codigo_categoria, descripcion_categoria FROM categorias");
    if ($resultado) {
        $reg = $resultado->fetch_array();
        echo "<h2 class='ej3_titulo'>CATEGORIAS</h2>";
        echo "<table class='ej3_tabla'>
                    <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                    </tr>";
        while ($reg != null){
            echo "<tr>
                        <td>"; echo $reg['codigo_categoria']; echo "</td>
                        <td>"; echo $reg['descripcion_categoria']; echo "</td>
                    </tr>";
            $reg = $resultado->fetch_array();
        }
        echo "</table>";
    }
    $resultado->close();
    $conexion->close();
}
else{
    echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}

include("../../pie_html.php");
?>
