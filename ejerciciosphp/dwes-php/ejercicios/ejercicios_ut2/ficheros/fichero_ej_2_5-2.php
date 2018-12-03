<?php
include("../../cabecera_html.php");

echo "<h1>Tabla numerada - Resultado</h1>";
$n = $_POST['n'];
$col = $_POST['col'];
$j = 1;
$i = 0;
if(is_numeric($n)){
    if($col <= 10) {
        echo "<table>
                <tr>
             "; for($i==0;$i<$col;$i++) {
                    if($j <= $n) {
                        echo "<td>$j</td>";
                    } else {
                        echo "<td>&nbsp;</td>";
                    }
                    $j++;
                }
          echo "</tr>
              </table>";
    } else {
        print "El número de columnas <b style='color: red'>debe estar entre 0 y 10</b>.";
    }
} else {
    print "No ha escrito <b style='color: red'>el número de celdas</b> numeradas como <b style='color: red'>número entero</b>.";
}
print "<br><br>";
echo "<a href='../ejercicio_2_5.php'>Volver al formulario</a>";


?>