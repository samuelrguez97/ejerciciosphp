<?php
include("../../cabecera_html.php");
error_reporting (0);

echo "<h1>Botón de opción - Resultado</h1>";
$aficion = $_POST['aficion'];

if(in_array(1, $aficion) && in_array(2, $aficion) && in_array(3, $aficion)) {
    print "Le gusta:<br><br>
           <ol>
                <li><b style='color:green'>El cine</b></li>
                <li><b style='color:green'>La literatura</b></li>
                <li><b style='color:green'>La música</b></li>
           </ol>";
} elseif(in_array(1, $aficion) && in_array(2, $aficion)) {
    print "Le gusta:<br><br>
           <ol>
                <li><b style='color:green'>El cine</b></li>
                <li><b style='color:green'>La literatura</b></li>
           </ol>";
} elseif(in_array(1, $aficion) && in_array(3, $aficion)) {
    print "Le gusta:<br><br>
           <ol>
                <li><b style='color:green'>El cine</b></li>
                <li><b style='color:green'>La música</b></li>
           </ol>";
} elseif(in_array(2, $aficion) && in_array(3, $aficion)) {
    print "Le gusta:<br><br>
           <ol>
                <li><b style='color:green'>La literatura</b></li>
                <li><b style='color:green'>La música</b></li>
           </ol>";
} elseif(in_array(1, $aficion)) {
    print "Le gusta:<br><br>
           <ol>
                <li><b style='color:green'>El cine</b></li>
           </ol>";
} elseif(in_array(2, $aficion)) {
    print "Le gusta:<br><br>
           <ol>
                <li><b style='color:green'>La literatura</b></li>
           </ol>";
} elseif(in_array(3, $aficion)) {
    print "Le gusta:<br><br>
           <ol>
                <li><b style='color:green'>La música</b></li>
           </ol>";
} else {
    print "<b style='color:red'>No ha marcado ninguna afición.</b>";
}

print "<br><br>";
echo "<a href='../ejercicio_2_5.php'>Volver al formulario</a>";
?>