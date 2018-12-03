<?php
include("../../cabecera_html.php");

echo "<h2 class='ej3_titulo'>CONSULTA DE NOTICIAS</h2>";

$conexion = new mysqli('localhost', 'root', '', 'inmobiliaria');
$conexion ->query("SET NAMES utf8");
$error = $conexion->connect_errno;

if ($error == null) {
    $resultado = $conexion->query("SELECT DISTINCT categoria FROM noticias");
    if ($resultado) {
        $reg = $resultado->fetch_array();
        echo "<form method='post' action='ficheros/fichero_ej_3_3-3.1.php'>
        <label>Mostrar noticias de la categoria: </label>
        <select name='categoria'>
            <option value='todas'>Todas</option>
            "; while ($reg != null) {
                    $categoria = $reg['categoria'];
                    echo "<option value='$categoria'>$categoria</option>";
                    $reg = $resultado->fetch_array();
               }
        echo "</select>
        <br><br>
        <input type='submit' name='submit' value='Enviar'>
      </form>";
    }
}

$conexion->close();

include("../../pie_html.php");

?>