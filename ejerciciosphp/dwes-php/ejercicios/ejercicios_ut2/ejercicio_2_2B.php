<?php
include("../cabecera_html.php");

// Ejercicio 1
echo "<p>Ejercicio 1</p>";
$cadena = "bienvenidos";
$long = strlen($cadena);
echo "<table>
          <tr>
            <th>Carácter</th>
            <th>Posicion</th>
          </tr>";
for($i=0;$i<$long;$i++) {
    echo "<tr>
              <td>".substr($cadena, $i, 1)."</td>
              <td>".$i."</td>
          </tr>";
}
echo "</table>";

// Ejercicio 2
echo "<p>Ejercicio 2</p>";
$cadena = "bienvenidos";
echo "<table>
          <tr>
            <th>Carácter</th>
            <th>Frecuencia</th>
          </tr>";
foreach(count_chars($cadena, 1) as $i => $val) {
    echo "<tr>
              <td>".chr($i)."</td>
              <td>".$val."</td>
          </tr>";
}
echo "</table>";

// Ejercicio 3
echo "<p>Ejercicio 3</p>";
$cad1 = "Atención";
$cad2 = "atención";
echo "<table>
          <tr>
            <td>cadena1</td>
            <td>Atención</td>
          </tr>
          <tr>
            <td>cadena2</td>
            <td>atención</td>
          </tr>
          <tr>
            <td>strmp(cadena1, cadena2)</td>
            <td>".strcmp($cad1, $cad2)."</td>
          </tr>
          <tr>
            <td>strcasecmp(cadena1, cadena2)</td>
            <td>".strcasecmp($cad1, $cad2)."</td>
          </tr>
      </table>";

// Ejercicio 4
echo "<p>Ejercicio 4</p>";
$cadena = "Vamos Al cine";
echo "<table>
          <tr>
            <th style='background-color: yellow'>frase</th>
            <th style='background-color: yellow'>Vamos Al cine</th>
          </tr>
          <tr>
            <td>strtoupper(frase)</td>
            <td>".strtoupper($cadena)."</td>
          </tr>
          <tr>
            <td>strtolower(frase)</td>
            <td>".strtolower($cadena)."</td>
          </tr>
          <tr>
            <td>ucfirst(frase)</td>
            <td>".ucfirst($cadena)."</td>
          </tr>
          <tr>
            <td>ucwords(frase)</td>
            <td>".ucwords($cadena)."</td>
          </tr>
      </table>";

// Ejercicio 5
echo "<p>Ejercicio 5</p>";
$cadena = "El libro cubre las técnicas basadas en el lenguaje PHP";
echo "<table>
          <tr>
            <th style='background-color: yellow'>cadena</th>
            <td>El libro cubre las técnicas basadas en el lenguaje PHP</td>
          </tr>
          <tr>
            <th style='background-color: yellow'>substr_count(cadena, 'a')</th>
            <td>".substr_count($cadena, 'a')."</td>
          </tr>
      </table>";

// Ejercicio 6
echo "<p>Ejercicio 6</p>";
$matriz1 = ["cougar", "ford", 2.500, "v6", 172, 5 => null];
$matriz2 = ["cougar", "ford", 2 => null, 2.500, "v6", "172"];
echo "<table>
          <tr>
            <th style='background-color: yellow'>índice</th>
            <td style='background-color: yellow'>0</td>
            <td style='background-color: yellow'>1</td>
            <td style='background-color: yellow'>2</td>
            <td style='background-color: yellow'>3</td>
            <td style='background-color: yellow'>4</td>
            <td style='background-color: yellow'>5</td>
          </tr>
          <tr>
            <th>matriz1</th>
            <td>".$matriz1[0]."</td>
            <td>".$matriz1[1]."</td>
            <td>".$matriz1[2]."</td>
            <td>".$matriz1[3]."</td>
            <td>".$matriz1[4]."</td>
            <td>".$matriz1[5]."</td>
          </tr>
          <tr>
            <th>matriz2</th>
            <td>".$matriz2[0]."</td>
            <td>".$matriz2[1]."</td>
            <td>".$matriz2[2]."</td>
            <td>".$matriz2[3]."</td>
            <td>".$matriz2[4]."</td>
            <td>".$matriz2[5]."</td>
          </tr>
      </table>";

// Ejercicio 7
echo "<p>Ejercicio 7</p>";
$matriz1 = array("cougar", "ford", null, "2.500", "V6", 172);
$matriz2 = array(2 => "cougar", "ford", 1 => null, 0 => "2.500", "V6", 172);
echo "<table>
          <tr>
            <th style='background-color: yellow'>índice</th>
            <td style='background-color: yellow'>0</td>
            <td style='background-color: yellow'>1</td>
            <td style='background-color: yellow'>2</td>
            <td style='background-color: yellow'>3</td>
            <td style='background-color: yellow'>4</td>
            <td style='background-color: yellow'>5</td>
          </tr>
          <tr>
            <th>matriz1</th>
            <td>".$matriz1[0]."</td>
            <td>".$matriz1[1]."</td>
            <td>".$matriz1[2]."</td>
            <td>".$matriz1[3]."</td>
            <td>".$matriz1[4]."</td>
            <td>".$matriz1[5]."</td>
          </tr>
          <tr>
            <th>matriz2</th>
            <td>".$matriz2[0]."</td>
            <td>".$matriz2[1]."</td>
            <td>".$matriz2[2]."</td>
            <td>".$matriz2[3]."</td>
            <td>".$matriz2[4]."</td>
            <td>".$matriz2[5]."</td>
          </tr>
      </table>";

// Ejercicio 8
echo "<p>Ejercicio 8</p>";
$matriz1 = array("cougar", "ford", null, "2.500", "V6", 172);
$matriz2 = array(2 => "cougar", "ford", 1 => null, 0 => "2.500", "V6", 172);

// matriz1
echo "Parte a) - for:\n";
for($i=0;$i<count($matriz1);$i++) {
    echo "$matriz1[$i]\n";
}
echo "<br>";
echo "Parte a) - foreach:\n";
foreach($matriz1 as $i => $val) {
    echo "[$i]: $val\n";
}
echo "<br>";

// matriz2
echo "Parte b) - for:\n";
for($i=0;$i<count($matriz2);$i++) {
    echo "$matriz2[$i]\n";
}
echo "<br>";
echo "Parte b) - foreach:\n";
foreach($matriz2 as $i => $val) {
    echo "[$i]: $val\n";
}
echo "<br>";

// utilizando var_dump
echo "var_dump de matriz1";
echo "<br>";
var_dump($matriz1);
echo "<br>";

echo "var_dump de matriz2";
echo "<br>";
var_dump($matriz1);
echo "<br>";

// Ejercicio 9
echo "<p>Ejercicio 9</p>";
$matriz1 = array("cougar", "ford", null, "2.500", "V6", 172);

// a)
unset($matriz1[3]);

// b)
echo "Parte b)<br>";
var_dump($matriz1);
echo "<br>";

// c
foreach($matriz1 as $i => $val) {
    unset($matriz1[$i]);
}

// d
echo "Parte d)<br>";
$matriz1[] = "seat";
$matriz1[] = "mercedes";
var_dump($matriz1);
echo "<br>";
echo "Los ha añadido en las posiciones siguientes a pesar de haber sido eliminados los datos del array (6 y 7)";
echo "<br>";

// e
echo "Parte e)<br>";
$matriz1 = array_values($matriz1);
print_r($matriz1);
echo "<br>";

// Ejercicio 10
echo "<p>Ejercicio 10</p>";
$m = array("café", "harina", "carne", "vegetales", "zumo", "pasta");

// a
echo "Parte a)<br>";
var_dump($m);
echo "<br>";

// b
asort($m);

// c
arsort($m);

// d
echo "Parte d)<br>";
print_r(array_keys($m));
echo "<br>";

// e
echo "Parte e)<br>";
print_r(current($m));
echo "<br>";

// f
next($m);
next($m);

// g
echo "Parte g)<br>";
print_r(key($m));
echo "<br>";

include ("../pie_html.php");
?>