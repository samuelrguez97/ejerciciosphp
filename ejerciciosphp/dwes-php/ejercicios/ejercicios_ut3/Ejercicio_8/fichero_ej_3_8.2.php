<?php
include("../../cabecera_html.php");

$nom_producto = $_POST['nombre'];

$conexion = new PDO('mysql:host=localhost; dbname=almacen', 'root', '');
$conexion ->query("SET NAMES utf8");

$propio = $_SERVER['PHP_SELF'];

$consulta_datos = $conexion->query('SELECT * FROM producto WHERE nombre_corto = "$nom_producto"');
$registro_datos = $consulta_datos->fetch();
$nombre_corto = $registro_datos['nombre-corto'];
$descripcion = $registro_datos['descripcion'];
$precio = $registro_datos['PVP'];

if($conexion) {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<div class='cabezado'>
                <span class='titulo-ej8'>Modificar datos del producto</span>
                <br>
                <span class='subtitulo-ej8'>$nom_producto</span>
          </div>
              <div class='cuerpo'>
                    <form method='post' action='$propio'>
                        <div class='izq'>
                            <span class='definir_campo'>Nombre: </span>
                            <span class='definir_campo'>Nombre corto: </span>
                            <span class='definir_campo'>Descripción: </span>
                            <span class='definir_campo'>Precio: </span>
                            <input type='submit' name='submit' value='Modificar ...'>
                        </div>
                        <div class='der'>
                            <textarea name='nombre' cols='60' value=''></textarea>
                            <br>
                            <input type='text' name='nombre_corto' value='$nombre_corto'>
                            <br>
                            <textarea name='descripcion' cols='60'>$descripcion</textarea>
                            <br>
                            <input type='text' name='precio' value='$precio'>
                        </div>
                    <form>
              </div>
              <div class='pie'>
              </div>";
    $conexion = null;
} else {
    echo "No se ha podido conectar con la base de datos";
}
include("../../pie_html.php");
?>