<?php

// Ejercicio 1
echo "<p style='color:green'>Ejercicio 1</p>";
function cadena($cadena = "Buenos dias clase") {
    return $cadena;
}
echo cadena();

// Ejercicio 2
echo "<p style='color:green'>Ejercicio 2</p>";
function concatenar($cadena1, $cadena2) {
    $cad1 = explode(" ", $cadena1);
    $cad2 = explode(" ", $cadena2);
    $primera = $cad1[0];
    $segunda = $cad2[0];
    return $primera." ".$segunda;
}
echo concatenar("Buenos dias mama.", "Quiero agua.");

// Ejercicio 3
echo "<p style='color:green'>Ejercicio 3</p>";
function mayor($n1, $n2) {
    return max($n1, $n2);
}
echo max(2, 3);

// Ejercicio 4
echo "<p style='color:green'>Ejercicio 4</p>";
function a_faren($temp) {
    return ($temp * 1.8) + 32;
}
echo a_faren(30);

// Ejercicio 5
echo "<p style='color:green'>Ejercicio 5</p>";
function a_cent($temp) {
    return ($temp - 32) / 1.8;
}
echo a_cent(86);

// Ejercicio 6
echo "<p style='color:green'>Ejercicio 6</p>";
function tabla($cad1, $cad2, $cad3, $cad4) {
    return "<table border=1px>
                <tr>
                        <td>$cad1</td>
                </tr>
                <tr>
                        <td>$cad2</td>
                </tr>
                <tr>
                        <td>$cad3</td>
                </tr>
                <tr>
                        <td>$cad4</td>
                </tr>
            </table>";
}
echo tabla("Hola", "buenos", "dias", "hoy");

// Ejercicio 7
echo "<p style='color:green'>Ejercicio 7</p>";
include('fichero_ej_2_2.php');
echo imc(63, 1.69);

// Ejercicio 8
echo "<p style='color:green'>Ejercicio 8</p>";
function aleatorio() {
    $n1 = rand(1, 100);
    $n2 = rand(1, 100);
    $n_mayor = mayor($n1, $n2);
    return "Los numeros generados son $n1, $n2 y el mayor es $n_mayor";
}
echo aleatorio();

// Ejercicio 9
echo "<p style='color:green'>Ejercicio 9</p>";
function bisiesto($anio){
    $comprobacion4 = round($anio / 4) - $anio / 4;
    $comprobacion100 = round($anio / 100) - $anio / 100;
    $comprobacion400 = round($anio / 400) - $anio / 400;
    if($comprobacion100 == 0 && $comprobacion400 != 0) {
        return "$anio es año bisiesto";
    } elseif($comprobacion4 == 0) {
        return "$anio es año bisiesto";
    } else {
        return "$anio no es año bisiesto";
    }
}
echo bisiesto(1908);

// Ejercicio 10
echo "<p style='color:green'>Ejercicio 10</p>";
function compr_fecha($mes, $dia, $anio) {
    $comprobacion = checkdate($mes, $dia, $anio);
    if($comprobacion) {
        return "Fecha correcta";
    } else {
        return "Fecha incorrecta";
    }
}
echo compr_fecha(10, 22, 2018);
?>