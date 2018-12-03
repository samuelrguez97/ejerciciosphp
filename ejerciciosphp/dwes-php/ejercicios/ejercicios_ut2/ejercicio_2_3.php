<?php
include("../cabecera_html.php");

// Ejercicio 1
echo "<p>Ejercicio 1</p>";
$numeros = array();
for($i=0;$i<=10;$i++) {
    $comprobacion = round($i/2) - ($i/2);
    if($comprobacion == 0) {
        $numeros[] = $i;
    }
}
print_r($numeros);

// Ejercicio 2
echo "<p>Ejercicio 2</p>";
$v[1] = 90;
$v[30] = 7;
$v['e'] = 99;
$v['hola'] = 43;
foreach($v as $datos) {
    print $datos."\n";
}

// Ejercicio 3
echo "<p>Ejercicio 3</p>";
$arrayej3 = array("Pedro", "Ana", 43, 1);
var_dump($arrayej3);
print "<br>";
print_r($arrayej3);

// Ejercicio 4
echo "<p>Ejercicio 4</p>";
$arrayej4 = array("Nombre" => "Pedro Torres", "Direccion" => "C/Mayor 37", "Telefono" => 123456789);
print "Nombre: ".$arrayej4["Nombre"]." Direccion: ".$arrayej4["Direccion"]."<br>
       Telefono: ".$arrayej4["Telefono"];

// Ejercicio 5
echo "<p>Ejercicio 5</p>";
$arrayej5 = array("Madrid", "Barcelona", "Londres", "Nueva York", "Los Angeles", "Chicago");
foreach($arrayej5 as $clave => $datos) {
    print "La ciudad con el índice ".$clave." tiene de nombre ".$datos."<br>";
}

// Ejercicio 6
echo "<p>Ejercicio 6</p>";
$arrayej6 = array("MD" => "Madrid", "BR" => "Barcelona", "LON" => "Londres", "NY" => "Nueva York", "LA" => "Los Angeles", "CH" => "Chicago");
foreach($arrayej6 as $clave => $datos) {
    print "El índice del array que contiene como valor ".$datos." es ".$clave."<br>";
}

// Ejercicio 7
echo "<p>Ejercicio 7</p>";
$arrayej7 = array();
$total = 0;
for($i=0;$i<=10;$i++) {
    $arrayej7[] = $i;
}
foreach($arrayej7 as $clave => $datos) {
    $comprobacion = round($clave/2) - ($clave/2);
    if($comprobacion == 0) {
        $total = $total + $clave;
    } else {
        print $datos."\n";
    }
}
print "<br>";
$media = round($total/count($arrayej7), 2);
print "La media de los pares es: ".$media;

// Ejercicio 8
echo "<p>Ejercicio 8</p>";
$arrayej8_1 = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");
$arrayej8_2 = array(12, 34, 45, 52, 12);
$arrayej8_3 = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", 34);
$resultado = array_merge($arrayej8_1, $arrayej8_2, $arrayej8_3);
print_r($resultado);

// Ejercicio 9
echo "<p>Ejercicio 9</p>";
$inverso = array_reverse($resultado);
print_r($inverso);

// Ejercicio 10
echo "<p>Ejercicio 10</p>";
$estadios_futbol = array("Barcelona" => "Camp Nou", "Real Madrid" => "Santiago Bernabeu", "Valencia" => "Mestalla", "Real Sociedad" => "Anoeta");
echo "<table>";
foreach($estadios_futbol as $clave => $datos) {
    echo "
         <tr>
             <td>$clave</td>
             <td>$datos</td>
         </tr>
    ";
}
echo "</table>";
$estadios_futbol = array_diff($estadios_futbol, array("Santiago Bernabeu"));
echo "<br>";
echo "<ol>";
foreach($estadios_futbol as $clave => $datos) {
    echo "
          <li>$clave - $datos</li>
    ";
}
echo "</ol>";

// Ejercicio 11
echo "<p>Ejercicio 11</p>";
$arrayej11 = array(
    "Los Simpson" => array("padre" => "Homer", "madre" => "Marge", "hijos" => "Bart, Lisa y Maggie"),
    "Los Griffin" => array("padre" => "Peter", "madre" => "Lois", "hijos" => "Chris, Meg y Stewie")
);
echo "<pre>";
foreach($arrayej11 as $clave => $valores) {
    echo "\n", "Familia: ", $clave," Padre: " , $valores["padre"], " Madre: ", $valores["madre"], " Hijos: ", $valores["hijos"];
}
echo "</pre>";

// Ejercicio 12
echo "<p>Ejercicio 12</p>";
$letras_dni = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
$dni = 71778199;
$resultado = fmod($dni, 23);
foreach($letras_dni as $clave => $datos) {
    if($resultado == $clave) {
        print "La letra correspondiente al DNI ".$dni." es la ".$datos;
    }
}


?>