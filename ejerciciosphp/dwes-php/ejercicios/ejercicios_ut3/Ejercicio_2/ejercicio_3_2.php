<?php
include("../../cabecera_html.php");

echo "<h2 class='ej3_titulo'>AGENDA</h2>";

$conexion = new mysqli('localhost', 'root', '', 'agenda');
$error = $conexion->connect_errno;

if($_POST) {
    $nombre = $_POST['nombre'];
    $tlf = $_POST['tlf'];
    $contactos = $conexion->query("SELECT * FROM contactos WHERE nombre = '$nombre'");
    $total_contactos = $contactos->num_rows;
    if(empty($nombre)) {
        echo "<div class='error'>Introduzca un nombre.</div>";
    } else {
        if($total_contactos > 0 && $tlf == '') {
            // Elimina contacto
            $resultado_2 = $conexion->query("DELETE FROM contactos WHERE nombre = '$nombre'");
        } elseif ($total_contactos > 0 && $tlf != '') {
            // Cambia telefono contacto existente
            $resultado_3 = $conexion->query("UPDATE contactos SET telefono = '$tlf' WHERE nombre = '$nombre'");
        } elseif ($total_contactos == 0 && $tlf != '') {
            $resultado_4 = $conexion->query("INSERT INTO contactos (nombre, telefono) VALUES ('$nombre', '$tlf')");
        } else {
            echo "<div class='error'>Introduzca un teléfono para el nuevo contacto.</div>";
        }
    }
}

if ($error == null) {
    $resultado_1 = $conexion->query("SELECT * FROM contactos");
    if ($resultado_1) {
        if ($resultado_1->num_rows != 0) {
            $reg = $resultado_1->fetch_array();
            $agenda[$reg['nombre']] = $reg['telefono'];
            echo "<ul>";
            while ($reg != null){
                echo "<li>"; echo $reg['nombre']; echo ": "; echo $reg['telefono']; echo "</li>";
                $reg = $resultado_1->fetch_array();
            }
            echo " </ul>";
        } else {
            print "No hay datos en la agenda.";
        }
    }
    $resultado_1->close();
} else {
    echo "<p>Error $error conectando a la BD: $conexion->connect_error</p>";
}

echo "<h2>Editar/Añadir/Eliminar contacto</h2>";
echo "<div class='formulario'>
          <form method='post' action='ejercicio_3_2.php'>
            <fieldset>
                Nombre: <input type='text' name='nombre' value='' />
                <br><br>
                Teléfono: <input type='number' name='tlf' value='' />
                <br><br>
                <button type='submit' value='submit' onclick='setTimeout(window.location.reload(), 500)'>Continuar ...</button>
            </fieldset>
          </form>
      </div>";

$conexion->close();

include("../../pie_html.php");
?>