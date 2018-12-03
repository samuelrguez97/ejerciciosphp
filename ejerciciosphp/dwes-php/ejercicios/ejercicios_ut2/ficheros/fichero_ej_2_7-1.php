<?php
include("../cabecera_html_ficheros.php");
error_reporting(0);

$n_ing = $_POST['n_ing'];

echo "<h1>RECETAS DE COCINA</h1>";
echo "<div class='formulario'>
          <form action='fichero_ej_2_7-2.php' method='post'>
            Escriba el nombre de la receta:
            <br><br>
            Nombre receta <input type='text' name='nombre' value='' />
            <br><br>
            Escriba los ingredientes de la receta y la cantidad de cada uno:
            <fieldset>
                <table>
                  "; for($i=0;$i<$n_ing;$i++) {
                        echo "<tr>
                                <td>Ingrediente:<input type='text' name='ingrediente[]'></td>
                                <td>Cantidad:<input type='number' name='cantidad[]'></td>
                                <td>Unidades:<input type='text' name='unidades[]' size='5px'></td>
                              </tr>";
                    }
          echo "<input type='hidden' name='n_ing' value='$n_ing'>
                </table>
            </fieldset>
            <br><br>
            <fieldset>
                <legend>Realización:</legend>
                <textarea class='area-texto' name='realizacion' value='' rows='7' cols='70'></textarea>
            </fieldset>
            <br><br>
            <button type='submit' value='Añadir'>Añadir</button>
          </form>
      </div>
";

include("../pie_html.php");
?>