<?php
    include("../../cabecera_html.php");

    $cod_familia = $_POST['familia'];

    $conexion = new PDO('mysql:host=localhost; dbname=almacen', 'root', '');
    $conexion ->query("SET NAMES utf8");

    if($conexion) {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta = $conexion->query("SELECT * FROM producto WHERE familia = '$cod_familia'");
        $consulta_f = $conexion->query("SELECT * FROM familia WHERE cod = '$cod_familia'");
        $consulta_all = $conexion->query('SELECT * FROM familia');
        $registro_f = $consulta_f->fetch();
        $nom_familia = $registro_f['nombre'];
        echo "<div class='cabezado'>
                <span class='titulo-ej8'>Listado de productos por familia</span>
                <form method='post' action='fichero_ej_3_8.1.php' class='formulario-ej8'>
                 <span>Familia: </span>
                    <select name='familia'>";
        while ($registro = $consulta_all->fetch()) {
            $nom_familia_all = $registro['nombre'];
            $cod_familia_all = $registro['cod'];
            if($cod_familia == $cod_familia_all) {
                echo "  <option value='$cod_familia_all' selected='selected'>$nom_familia_all</option>";
            } else {
                echo "  <option value='$cod_familia_all'>$nom_familia_all</option>";
            }
        }
        echo "      </select>
                 <input type='submit' value='Mostrar productos' name='enviar'>
                </form>
              </div>
              <div class='cuerpo'>
                <span class='titulo_cuerpo-ej8'>Productos disponibles: </span>
                <table class='tabla-ej8'>
                    <tr>
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                    </tr>
                  "; while($registro = $consulta->fetch()) {
                        $nombre = $registro['nombre_corto'];
                        $precio = $registro['PVP'];
                        $formulario = "fichero_ej_3_8.2.php";
                        echo "<tr>
                                  <td>Producto: $nombre</td>
                                  <td>- Precio: $precio</td>
                                  <td>
                                    <form method='post' action='fichero_ej_3_8.2.php'>
                                        <input type='hidden' name='nombre' value='$nombre'>
                                        <input type='submit' value='Editar' name='editar'>
                                    </form>
                                  </td>
                              </tr>";
                     }
           echo "</table>
              </div>
              <div class='pie'>
              </div>";
        $conexion = null;
    } else {
        echo "No se ha podido conectar con la base de datos";
    }
include("../../pie_html.php");
?>