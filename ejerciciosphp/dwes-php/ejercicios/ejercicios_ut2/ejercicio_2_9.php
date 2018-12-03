<?php
include("../cabecera_html.php");


$agenda = [
    "Mercedes" => 98533434,
    "Pedro" => 676898989,
    "Ramon" => 656232323
];

if($_POST) {
    $nombre = $_POST['nombre'];
    $tlf = $_POST['tlf'];
    foreach($agenda as $clave => $valor) {
        if($nombre == $clave && empty($tlf)) {
            unset($agenda[$clave]);
        }
        if ($nombre == $clave && !empty($tlf)) {
            $agenda[$clave] = $tlf;
        }
    }
    if(!in_array($nombre, $agenda)) {
        if (!empty($nombre) && empty($tlf)) {
            echo "<div class='error'>Introduzca un teléfono para el nuevo contacto.</div>";
        } elseif(!empty($nombre)) {
            $agenda[$nombre] = $tlf;
        }
    }
    if(empty($nombre)){
        echo "<div class='error'>Introduzca un nombre.</div>";
    }
}

echo "<h1>AGENDA</h1>";
echo "<ul>
        "; foreach($agenda as $clave => $valor) {
            echo "<li>$clave: $valor</li>";
        }
echo " </ul>";

echo "<h2>Editar/Añadir/Eliminar contacto</h2>";
echo "<div class='formulario'>
          <form method='post' action='ejercicio_2_9.php'>
            <fieldset>
                Nombre: <input type='text' name='nombre' value='' />
                <br><br>
                Teléfono: <input type='number' name='tlf' value='' />
                <br><br>
                <button type='submit' value='submit'>Continuar ...</button>
            </fieldset>
          </form>
      </div>";

include("../pie_html.php");
?>