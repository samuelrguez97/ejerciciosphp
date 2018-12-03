<?php
include("../../cabecera_html.php");

echo "<h1>Convertidor de temperaturas Celsius / Fahrenheit - Resultado</h1>";
$temp = $_POST['temp'];
$unidad = $_POST['unidad'];

$n_temp = 0;

if($unidad == 'Celsius') {
    $n_temp = (1.8 * $temp) + 32;
    print "$temp ºC son $n_temp ºF";
} else {
    $n_temp = ($temp - 32) / 1.8;
    print "$temp ºF son $n_temp ºC";
}
print "<br><br>";
echo "<a href='../ejercicio_2_5.php'>Volver al formulario</a>";

?>