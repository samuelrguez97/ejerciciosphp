<?php
    include("../../cabecera_html.php");

    $conexion = new PDO('mysql:host=localhost; dbname=almacen', 'root', '');
    $conexion ->query("SET NAMES utf8");

    if($conexion) {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta_f = $conexion->query('SELECT * FROM familia');
        echo "<div class='cabezado'>
                <span class='titulo-ej8'>Listado de productos por familia</span>
                <form method='post' action='fichero_ej_3_8.1.php' class='formulario-ej8'>
                 <span>Familia: </span>
                 <select name='familia'>";
        while ($registro = $consulta_f->fetch()) {
            $nom_familia = $registro['nombre'];
            $cod_familia = $registro['cod'];
            echo "  <option value='$cod_familia'>$nom_familia</option>";
        }
        echo "      </select>
                 <input type='submit' value='Mostrar productos' name='enviar'>
                </form>
              </div>
              <div class='cuerpo'>
              </div>
              <div class='pie'>
              </div>";
        $conexion = null;
    } else {
        echo "No se ha podido conectar con la base de datos";
    }

    include("../../pie_html.php");
?>