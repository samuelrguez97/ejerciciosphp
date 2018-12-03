<?php
include("../cabecera_html.php");
include ("funciones.php");

// Ejercicio 1
echo "<p>Ejercicio 1</p>";
$correo = "a.b.c.d@pepe.n.com";
if(validarCorreo($correo)) {
    print("El correo es valido.");
} else {
    print("El correo no es valido.");
}

// Ejercicio 2
echo "<p>Ejercicio 2</p>";
$nombres = array("juan", "Marta", "Mercedes", "martín", "Jorge", "Miriam", "Nanci", "MIRTA");
foreach($nombres as $valor) {
    if(substr($valor, 0, 1) == "m" || substr($valor, 0, 1) == "M") {
        $n_nombres[] = $valor;
    }
}
for($i=0;$i<count($n_nombres);$i++) {
    if($i == count($n_nombres)-1) {
        print ucwords($n_nombres[$i]).".";
    } else {
        print ucwords($n_nombres[$i]).", ";
    }
}

// Ejercicio 3
echo "<p>Ejercicio 3</p>";
$a = array(1,2,3,1,1,2,3,3,4,4,4,0,1);
$b = array("blanco","azul","blanco","blanco","azul","Blanco","Azul");
$c = array( "b" =>"verde",
            "c" =>"rojo",
            "e" =>"verde",
            "f" =>"Rojo",
            "g" =>"Verde",
            "a"=>"rojo",
            "d" =>"azul");

print "Funcion sort<br>";
sort($a);
print_r($a);
print "<br>";
sort($b);
print_r($b);
print "<br>";
sort($c);
print_r($c);
print "<br><br>";

print "Funcion rsort<br>";
rsort($a);
print_r($a);
print "<br>";
rsort($b);
print_r($b);
print "<br>";
rsort($c);
print_r($c);
print "<br><br>";

print "Funcion ksort<br>";
ksort($a);
print_r($a);
print "<br>";
ksort($b);
print_r($b);
print "<br>";
ksort($c);
print_r($c);
print "<br><br>";

print "Funcion krsort<br>";
krsort($a);
print_r($a);
print "<br>";
krsort($b);
print_r($b);
print "<br>";
krsort($c);
print_r($c);
print "<br><br>";

print "Funcion asort<br>";
asort($a);
print_r($a);
print "<br>";
asort($b);
print_r($b);
print "<br>";
asort($c);
print_r($c);
print "<br><br>";

print "Funcion arsort<br>";
arsort($a);
print_r($a);
print "<br>";
arsort($b);
print_r($b);
print "<br>";
arsort($c);
print_r($c);
print "<br><br>";

// Ejercicio 4
echo "<p>Ejercicio 4</p>";
for($i=0;$i<15;$i++) {
    $n_aleatorio[] = rand(1, 400);
}
print_r($n_aleatorio);
print "<br>";
$N = 6;
$suma = 0;
for($i=0;$i<$N;$i++) {
    $suma = $n_aleatorio[$i] + $suma;
}
echo "La suma de los $N primeros numeros es de: $suma";

// Ejercicio 5
echo "<p>Ejercicio 5</p>";
$columnas = 5;
$filas = 5;
$j = 0;
$valor_i = 0;
echo "<table>";
while($j < $filas) {
    $i = 0;
    echo "<tr>";
    while($i < $columnas) {
        if($i == $valor_i) {
            echo "<td>1</td>";
        } else {
            echo "<td>0</td>";
        }
        $i++;
    }
    echo "</tr>";
    $valor_i++;
    $j++;
}
echo "</table>";

// Ejercicio 6
echo "<p>Ejercicio 6</p>";
$columnas = 15;
$filas = 5;
$j = 0;
echo "<table>";
while($j < $filas) {
    $i = 0;
    echo "<tr>";
    while($i < $columnas) {
        if($j == 0 || $i == 0 || $i == 14 || $j == 4) {
            echo "<td>1</td>";
        } else {
            echo "<td>0</td>";
        }
        $i++;
    }
    echo "</tr>";
    $j++;
}
echo "</table>";

// Ejercicio 7
echo "<p>Ejercicio 7</p>";
foreach(range(0, 100, 5) as $valor) {
    $array_ej7_1[] = $valor;
}
foreach(range(2, 20, 2) as $valor) {
    $array_ej7_2[] = $valor;
}
$array_ej7_nuv = array_merge($array_ej7_1, $array_ej7_2);
arsort($array_ej7_nuv);
echo "<table>";
foreach($array_ej7_nuv as $clave => $valor) {
    echo "<tr>
            <td>$clave</td>
            <td>$valor</td>
          </tr>";
}
echo "</table>";

// Ejercicio 8
echo "<p>Ejercicio 8</p>";
echo "<a href='ficheros/fichero_ej_2_4-8.php'>Ejercicio 8</a>"

?>