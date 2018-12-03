<?php
include("../cabecera_html_ficheros.php");

$nombre = $_POST['nombre'];
$ingrediente = $_POST['ingrediente'];
$cantidad = $_POST['cantidad'];
$unidades = $_POST['unidades'];
$realizacion = $_POST['realizacion'];
$n_ing = $_POST['n_ing'];

echo "<h1>RECETARIO DE COCINA</h1>";
echo "Receta incorporada
      <br><br>
      Receta de <b>$nombre</b>
         <ul>";
            for($i=0;$i<$n_ing;$i++) {
                echo "<li>$ingrediente[$i]: $cantidad[$i] - $unidades[$i]</li>";
            }
   echo "</ul>
         <br>
         <b>Realización:</b>
         <br><br>
         $realizacion
";

include("../../pie_html.php");
?>