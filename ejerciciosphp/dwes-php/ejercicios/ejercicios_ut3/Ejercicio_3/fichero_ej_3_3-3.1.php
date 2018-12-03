<?php
include("../../cabecera_html.php");

echo "<h2 class='ej3_titulo'>CONSULTA DE NOTICIAS</h2>";

$categoria = $_POST['categoria'];

$conexion = new mysqli('localhost', 'root', '', 'inmobiliaria');
$conexion ->query("SET NAMES utf8");
$error = $conexion->connect_errno;

if ($error == null) {
    if($categoria == "todas") {
        $resultado = $conexion->query("SELECT * FROM noticias ORDER BY fecha");
    } else {
        $resultado = $conexion->query("SELECT * FROM noticias WHERE categoria = '$categoria' ORDER BY fecha");
    }
    if ($resultado) {
        if ($resultado->num_rows != 0) {
            $reg = $resultado->fetch_array();
            echo "<table class='ej3_tabla'>";
            echo "<tr>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Categoría</th>
                    <th>Fecha</th>
                    <th>Imagen</th>
                  </tr>";
            while ($reg != null){
                $imagen = $reg['imagen'];
                echo "<tr>
                    <td>"; echo $reg['titulo']; echo "</td>
                    <td>"; echo $reg['texto']; echo "</td>
                    <td>"; echo $reg['categoria']; echo "</td>
                    <td>"; echo $reg['fecha']; echo "</td>
                    <td>
                        "; if($imagen) {
                        echo "<a href='../imagenes/$imagen'><img src='../imagenes/ico-fichero.gif'></a>";
                } else {
                    echo "";
                }
             echo "</td>
                  </tr>";
                $reg = $resultado->fetch_array();
            }
            echo "</table>";
            echo "<br><br>";
            echo "<a href='ejercicio_3_3-3.php'>Volver al formulario</a>";
        } else {
            print "No hay datos.";
        }
    }
    $resultado->close();
} else {
    echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}

$conexion->close();
include("../../pie_html.php");
?>