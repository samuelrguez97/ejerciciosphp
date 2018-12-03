<?php
include("../../cabecera_html.php");
error_reporting(0);

$cuadernos = $_POST['cuadernos'];

if(!empty($cuadernos)) {
    if(is_numeric($cuadernos)) {
        if($cuadernos > 30) {
            $precio = $cuadernos * 1;
            echo "El precio total del pedido asciende a $precio €";
        } elseif($cuadernos < 30 && $cuadernos > 10) {
            $precio = $cuadernos * 1.5;
            echo "El precio total del pedido asciende a $precio €";
        } else {
            $precio = $cuadernos * 3;
            echo "El precio total del pedido asciende a $precio €";
        }
    } else {
        echo "<b style='color:red'>Cantidad errónea</b>";
    }
} else {
    echo "<b style='color:red'>Faltan datos</b>";
}

print "<br><br>";
echo "<a href='../ejercicio_2_6.php'>Volver al formulario</a>";

?>