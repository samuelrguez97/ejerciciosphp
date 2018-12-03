<?php
include("../../cabecera_html.php");

echo "<h1>Calcula letra DNI - Resultado</h1>";
$dni = $_POST['dni'];
$letras_dni = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
$resultado = fmod($dni, 23);
foreach($letras_dni as $clave => $datos) {
    if($resultado == $clave) {
        print "Tu letra del NIF es $datos";
    }
}
print "<br><br>";
echo "<a href='../ejercicio_2_5.php'>Volver al formulario</a>";
?>