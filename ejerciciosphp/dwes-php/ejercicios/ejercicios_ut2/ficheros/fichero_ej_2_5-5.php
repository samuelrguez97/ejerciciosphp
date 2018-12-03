<?php
include("../../cabecera_html.php");
include("../funciones.php");

echo "<h1>Comprobar email - Resultado</h1>";
$correo = $_POST['email'];

if(validarCorreo($correo)) {
    print "Esta dirección de correo ($correo) <b style='color:green'>es válida</b>";
} else {
    print "Esta dirección de correo ($correo) <b style='color:red'>no es válida</b>";
}
print "<br><br>";
echo "<a href='../ejercicio_2_5.php'>Volver al formulario</a>";