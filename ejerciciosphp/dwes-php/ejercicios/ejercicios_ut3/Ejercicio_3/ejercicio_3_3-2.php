<?php
include("../../cabecera_html.php");

echo "<h1>CONSULTA DE NOTICIAS</h1>";

$conexion = new mysqli('localhost', 'root', '', 'inmobiliaria');
$conexion ->query("SET NAMES utf8");
$error = $conexion->connect_errno;

if ($error == null) {
    $resultado = $conexion->query("SELECT * FROM noticias ORDER BY fecha");
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
                        echo "<a href='imagenes/$imagen'><img src='imagenes/ico-fichero.gif'></a>";
                } else {
                    echo "";
                }
                echo "</td>
                  </tr>";
                $reg = $resultado->fetch_array();
            }
            echo " </table>";
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