<?php
include("../../cabecera_html.php");
error_reporting (0);

echo "<h1>Botón de opción - Resultado</h1>";
$sexo = $_POST['sexo'];

if($sexo == "hombre") {
    print "Es un <b style='color:green'>hombre</b>.";
} elseif($sexo == "mujer") {
    print "Es una <b style='color:green'>mujer</b>.";
} else {
   print "<b style='color:red'>No ha marcado su sexo.</b>";
}

print "<br><br>";
echo "<a href='../ejercicio_2_5.php'>Volver al formulario</a>";
?>