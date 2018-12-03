<?php
include("../../cabecera_html.php");

echo "<h2 class='ej3_titulo'>Productos de la tienda</h2>";

$conexion = new mysqli('localhost', 'root', '', 'tienda');
$error = $conexion->connect_errno;
$categoria = $_POST['categoria'];

if ($error == null) {
    $resultado = $conexion->query("SELECT codigo_producto, descripcion, precio, stock FROM productos WHERE codigo_categoria = '$categoria'");
    if ($resultado) {
        $reg = $resultado->fetch_array();
        while ($reg != null) {
            print "<span>Categoria: $categoria</span>";
            echo "<br><br>";
            echo "<form method='post' action='fichero_ej_3_4.2.php'>";
            echo "<table class='ej3_tabla'>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>";
                while ($reg != null) {
                    echo "<tr>
                            <td>";echo $reg['codigo_producto'];echo "</td>
                            <td>";echo $reg['descripcion'];echo "</td>
                            <td>";echo $reg['precio'];echo "</td>
                            <td>";echo $reg['stock'];echo "</td>
                          </tr>";
                    $reg = $resultado->fetch_array();
                }
            echo "</table>";
            echo "<br><br>
                  <input type='hidden' name='categoria' value='$categoria'>
                  <button type='submit' name='submit' value='addprod'>Añadir producto</button>
                </form>";
        }
        $resultado->close();
    } else {
        print "Error en la consulta.";
    }
    $conexion->close();
}
else {
    echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}
include("../../pie_html.php");
?>