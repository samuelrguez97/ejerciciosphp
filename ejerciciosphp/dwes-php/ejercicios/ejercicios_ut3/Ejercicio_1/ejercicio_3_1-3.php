<?php
include("../../cabecera_html.php");

// Ejercicio 3
echo "<p>Ejercicio 3</p>";
$conexion = new mysqli('localhost', 'root', '', 'tienda');
$error = $conexion->connect_errno;
if ($error == null) {
    $resultado_1 = $conexion->query("SELECT codigo_categoria, descripcion_categoria FROM categorias");
    if ($resultado_1) {
        $reg = $resultado_1->fetch_array();
        echo "<div class='centrado'>";
        echo "<h2 class='ej3_titulo'>Inserta un producto</h2>";
        echo "<form method='post' action='ejercicio_3_1-3.php'>";
        echo "<table class='ej3_tabla'>
                <tr>
                    <td>Código</td>
                    <td><input type='text' name='codigo' value='' required='required'></td>
                </tr>
                <tr>
                    <td>Descripción</td>
                    <td><input type='text' name='descripcion' value='' required='required'></td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td><input type='text' name='precio' value='' required='required'></td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td><input type='text' name='stock' value='' required='required'></td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td><select name='categoria'>";
                            while ($reg != null) {
                                echo "<option value='";echo $reg['codigo_categoria'];echo "'>";echo $reg['descripcion_categoria'];echo "</option>";
                                $reg = $resultado_1->fetch_array();
                            }
                  echo "</select>
                    </td>
                </tr>
             </table>";
       echo "<br>";
       echo "<button type='submit' name='submit' value='Insertar'>Insertar</button>";
       echo "</form>";
       echo "</div>";
    }
    if($_POST) {
        $peticion = 'INSERT INTO productos VALUES (?, ?, ?, ?, ?)';
        if ($resultado_2 = $conexion->prepare($peticion)) {
            $codigo = $_POST['codigo'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            $categoria = $_POST['categoria'];
            $resultado_2->bind_param("ssdds", $codigo, $descripcion, $precio, $stock, $categoria);
            $resultado_2->execute();
            $resultado_2->close();
        }
    }
    $resultado_1->close();
    $conexion->close();
}
else{
    echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}

include("../../pie_html.php");
?>
