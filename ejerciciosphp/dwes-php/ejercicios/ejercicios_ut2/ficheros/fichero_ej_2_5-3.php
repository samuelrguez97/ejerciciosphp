<?php
include("../../cabecera_html.php");

echo "<h1>Calcular año bisiesto - Resultado</h1>";
$anio = $_POST['anio'];
if(ctype_digit($anio)){
    if($anio <= 10000) {
        $comprobacion4 = round($anio / 4) - $anio / 4;
        $comprobacion100 = round($anio / 100) - $anio / 100;
        $comprobacion400 = round($anio / 400) - $anio / 400;
        if($comprobacion100 == 0 && $comprobacion400 != 0) {
            echo "El año $anio es año bisiesto porque es divisible entre 100 pero no por 400.";
        } elseif($comprobacion4 == 0) {
            echo "El año $anio es año bisiesto porque es divisible por 4.";
        } else {
            echo "El año $anio no es año bisiesto porque no es divisible por 4 ni por 100 (no siendo divisible por 400).";
        }
    } else {
        echo "El año $anio supera el limite de 10.000";
    }
} else {
    echo "El valor introducido contiene valores que no son digitos<br>
          Ha introducido: $anio";
}
print "<br><br>";
echo "<a href='../ejercicio_2_5.php'>Volver al formulario</a>";



?>