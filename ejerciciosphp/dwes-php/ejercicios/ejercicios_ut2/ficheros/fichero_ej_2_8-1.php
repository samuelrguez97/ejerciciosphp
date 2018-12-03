<?php
include("../cabecera_html_ficheros.php");


$n = $_POST['n'];
$cont = 1;

echo "<h1>TABLA CON CASILLAS DE VERIFICACIÓN - PASO 1</h1>";
echo "<div class='formulario'>
        <form action='fichero_ej_2_8-2.php' method='post'>
            <fieldset>
                <table class='bordetabla'>
                    "; for($i=0;$i<$n;$i++) {
                            echo "<tr>
                                      "; for($j=0;$j<$n;$j++) {
                                            echo "<td><input type='checkbox' name='casilla[]' value='$cont'>$cont</td>";
                                            $cont++;
                                         }
                            echo" </tr>";
                       }
          echo "</table>
                <input type='hidden' name='tamaño' value='$n'/>
                <br>
                <button type='submit' value='Contar'>Contar</button>
                <button type='reset' value='Borrar'>Borrar</button>
            </fieldset>
          </form>
      </div>
";

include("../../pie_html.php");
?>