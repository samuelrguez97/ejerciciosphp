<?php
include("../cabecera_html.php");

// Ejercicio 1
echo "<p>Ejercicio 1</p>";
echo "<h1>RECETAS DE COCINA</h1>";
echo "<form action='ficheros/fichero_ej_2_7-1.php' method='post'>
        Indique número de ingredientes:
        <input type='number' name='n_ing' value='' required='required'/>
        <br><br>
        <button type='submit' value='Enviar'>Enviar</button>
      </form>
";

include("../pie_html.php");
?>