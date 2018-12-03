<?php
include("../../cabecera_html.php");

echo "<h1>Adivinar número - Resultado</h1>";
$numero = $_POST['num'];
$num_sistema = rand(1, 10);

if($numero <= 10) {
    if($numero > $num_sistema) {
        print "El numero $numero fue muy grande.<br><br>
               Yo pensé en el número $num_sistema";
    } elseif ($numero < $num_sistema) {
        print "El numero $numero fue muy pequeño.<br><br>
               Yo pensé en el número $num_sistema";
    } else {
        print "Acertaste! Pensé en el numero $num_sistema";
    }
} else {
    print "El numero es demasiado grande (menor o igual de 10)";
}
print "<br><br>";
echo "<a href='../ejercicio_2_5.php'>Volver al formulario</a>";
?>