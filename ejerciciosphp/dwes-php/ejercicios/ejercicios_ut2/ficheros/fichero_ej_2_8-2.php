<?php
include("../cabecera_html_ficheros.php");
error_reporting(0);

$casilla = $_POST['casilla'];
$tamaño = $_POST['tamaño'];

echo "<h1>TABLA CON CASILLAS DE VERIFICACIÓN - PASO 1</h1>";

if(empty($casilla)) {
    print "No has marcado ninguna casilla";
} else {
    $tamaño = $tamaño * $tamaño;
    $tamaño_array = count($casilla);
    print "Has marcado $tamaño_array  casillas de un total de $tamaño: ";
    foreach($casilla as $value) {
        print $value.", ";
    }
}

include("../../pie_html.php");
?>