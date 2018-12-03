<?php
include("../../cabecera_html.php");

// Ejercicio 4
echo "<p>Ejercicio 4</p>";
echo "<span>Seleccione una categoria</span>";
echo "<br><br>";
echo "<form method='post' action='fichero_ej_3-4.1.php'>";
echo "<span>Categoria: </span>";
$conexion = new mysqli('localhost', 'root', '', 'tienda');
$error = $conexion->connect_errno;
if ($error == null) {
    $resultado = $conexion->query("SELECT codigo_categoria, descripcion_categoria FROM categorias");
    if ($resultado) {
        $reg = $resultado->fetch_array();
        echo "<select name='categoria'>";
                while ($reg != null) {
                    echo" <option value='";echo $reg['codigo_categoria'];echo "'>";echo $reg['descripcion_categoria'];echo "</option>";
                    $reg = $resultado->fetch_array();
                }
        echo "</select>";
        echo "<br><br>";
        echo "<button type='submit' name='submit' value='enviar'>Enviar</button>";
        echo "</form>";
    }
}

include("../../pie_html.php");
?>