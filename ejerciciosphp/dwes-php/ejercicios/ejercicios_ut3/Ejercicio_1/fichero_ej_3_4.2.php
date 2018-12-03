<?php
include("../../cabecera_html.php");

$conexion = new mysqli('localhost', 'root', '', 'tienda');
$error = $conexion->connect_errno;
if ($error == null) {
    $categoria = $_POST['categoria'];
    $resultado_1 = $conexion->query("SELECT descripcion_categoria FROM categorias WHERE codigo_categoria = '$categoria'");
    if($resultado_1) {
        $reg = $resultado_1->fetch_array();
        echo "<div class='centrado'>";
        echo "<h2 class='ej3_titulo'>Inserta un producto</h2>";
        echo "<form method='post' action='fichero_ej_3_4.2.php'>";
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
            echo "<option value='$categoria' selected='selected'>"; echo $reg['descripcion_categoria']; echo "</option>";
            echo "</select>
                        </td>
                   </tr>
                 </table>";
            echo "<br>";
            echo "<button type='submit' name='submit' value='Insertar'>Insertar</button>";
            echo "</form>";
            echo "</div>";
    }
    if(isset($_POST['codigo'])) {
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
} else{
    echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}

include("../../pie_html.php");
?>
