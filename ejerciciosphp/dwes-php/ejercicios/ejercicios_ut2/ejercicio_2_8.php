<?php
include("../cabecera_html.php");


// Ejercicio 1
echo "<p>Ejercicio 1</p>";
echo "<h1>TABLA CON CASILLAS DE VERIFICACIÓN</h1>";
echo "<div class='formulario'>
          <form action='ficheros/fichero_ej_2_8-1.php' method='post'>
            Escribe un número y dibujaré una tabla cuadrada de ese tamaño con casillas de verificación en cada casilla.
            <br><br>
            <fieldset>
                Tamaño: <input type='number' name='n' required='required'/>
                <button type='submit' value='Dibujar'>Dibujar</button>
            </fieldset>
          </form>
      </div>
";

// Ejercicio 3
echo "<p>Ejercicio 3</p>";
echo "<h1>EJERCICIO SOBRE ARRAYS</h1>";
$propio = $_SERVER['PHP_SELF'];

$array8 = array("Prueba1", "Prueba2");

$first ="";
$last = "";

if(isset($_POST['add_final'])) {
    if(!empty($_POST['add1'])) {
        array_push($array8, $_POST['add1']);
    } elseif(!empty($_POST['add2'])) {
        array_push($array8, $_POST['add2']);
    }
}

if(isset($_POST['add_principio'])) {
    if(!empty($_POST['add1'])) {
        array_unshift($array8, $_POST['add1']);
    } elseif(!empty($_POST['add2'])) {
        array_unshift($array8, $_POST['add2']);
    }
}

if(isset($_POST['extrae_principio'])) {
    $first = array_shift($array8);

}

if(isset($_POST['extrae_final'])) {
    $last = array_pop($array8);
}

echo "<div class='formulario'>
          <form action='$propio' method='post'>
                <fieldset>
                  <div class='izq'>
                    <button type='submit' name='extrae_principio'>Extrae del principio</button>
                   ";
               echo "<br><br>
                    <input type='text' name='add1' value=";print $first;echo ">
                    <br><br>
                    <button type='submit' name='add_final'>Añade al final</button>
                   ";
               echo "
                  </div>
                  <div class='centro'>
                    <table class='tabla8-3'>
                        <tr>
                            <th>Posición</th>
                            <th>Valor</th>
                        </tr>
                     ";
                        foreach($array8 as $clave => $valor) {
                         echo "<tr>
                                    <td>$clave</td>
                                    <td>$valor</td>
                               </tr>";

                     }
              echo "</table>
                  </div>
                  <div class='der'>
                    <button type='submit' name='add_principio'>Inserta al principio</button>
                    <br><br>
                    <input type='text' name='add2' value=";print $last;echo ">
                    <br><br>
                    <button type='submit' name='extrae_final'>Extrae del final</button>
                  </div>
                </fieldset>
          </form>
      </div>
";

include("../pie_html.php");
?>