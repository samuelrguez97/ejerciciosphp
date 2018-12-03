<?php
include("../cabecera_html_ficheros.php");
error_reporting(0);

echo "<h1>Datos personales - Resultado</h1>";
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];
$sexo = $_POST['sexo'];
$estado = $_POST['estado'];
$aficion = $_POST['aficion'];

if(empty($nombre)) {
    $nombre = null;
    print "<b class='alerta'>No ha indicado su nombre</b><br>";
} else {
    print "Su nombre es <b>$nombre</b><br>";
}

if(empty($apellidos)) {
    $apellidos = null;
    print "<b class='alerta'>No ha indicado sus apellidos</b><br>";
} else {
    print "Su nombre es <b>$apellidos</b><br>";
}

if(empty($edad)) {
    $edad = null;
    print "<b class='alerta'>No ha indicado su edad</b><br>";
} else {
    print "Su edad es <b>$edad</b><br>";
}

if(empty($peso)) {
    $peso = null;
    print "<b class='alerta'>No ha indicado su peso</b><br>";
} else {
    print "Su peso es <b>$peso</b> kg<br>";
}

if(empty($sexo)) {
    $sexo = null;
    print "<b class='alerta'>No ha indicado su sexo</b><br>";
} else {
    print "Su nombre es <b>$sexo</b><br>";
}

if(empty($estado)) {
    $estado = null;
    print "<b class='alerta'>No ha indicado su estado</b><br>";
} else {
    print "Su estado es <b>$estado</b><br>";
}

if(empty($aficion)) {
    print "No ha seleccionado aficiones";
} else {
    print "Sus aficiones son: ";
    foreach($aficion as $valor) {
        print "$valor, ";
    }
}

print "<br><br>";
echo "<a href='../ejercicio_2_6.php'>Volver al formulario</a>";

include("../../pie_html.php");

?>