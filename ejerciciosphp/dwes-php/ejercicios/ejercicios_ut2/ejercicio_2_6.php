<?php
include("../cabecera_html.php");


// Ejercicio 1
echo "<p>Ejercicio 1</p>";
echo "<h1>LISTA DE PRECIOS</h1>";
echo "
        <div class='tablas'>
        <table class='tablas'>
            <tr>
                <th>Cantidad </th>
                <th>Precio Unidad</th>
            </tr>
            <tr>
                <td>menos de 10</td>
                <td>2€</td>
            </tr>
            <tr>
                <td>entre 10 y 30</td>
                <td>1.5€</td>
            </tr>
            <tr>
                <td>más de 30</td>
                <td>1€</td>
            </tr>
        </table>
        </div><br>
";
echo "<form action='ficheros/fichero_ej_2_6-1.php' method='post'>
        Seleccione la cantidad a pedir según nuestras tarifas <br><br>
        Número de cuadernos: <input type='text' name='cuadernos' value='' />
        <button type='submit' name='enviar'>Enviar</button>
      </form>
";

// Ejercicio 2
echo "<p>Ejercicio 2</p>";
echo "<h1>LISTA DE PRECIOS</h1>";
echo "
        <div class='tablas'>
        <table>
            <tr>
                <th>Cantidad </th>
                <th>Precio Unidad</th>
            </tr>
            <tr>
                <td>menos de 10</td>
                <td>2€</td>
            </tr>
            <tr>
                <td>entre 10 y 30</td>
                <td>1.5€</td>
            </tr>
            <tr>
                <td>más de 30</td>
                <td>1€</td>
            </tr>
        </table>
        </div><br>
";
$propio = $_SERVER['PHP_SELF'];
echo "<form action='$propio' method='post'>
        Seleccione la cantidad a pedir según nuestras tarifas <br><br>
        Número de cuadernos: <input type='text' name='cuadernos' value='' />
        <button type='submit' name='enviar'>Enviar</button>
      </form>
";
error_reporting(0);
$cuadernos = $_POST['cuadernos'];
if(!empty($cuadernos)) {
    if(is_numeric($cuadernos)) {
        if($cuadernos > 30) {
            $precio = $cuadernos * 1;
            echo "El precio total del pedido asciende a $precio €";
        } elseif($cuadernos < 30 && $cuadernos > 10) {
            $precio = $cuadernos * 1.5;
            echo "El precio total del pedido asciende a $precio €";
        } else {
            $precio = $cuadernos * 3;
            echo "El precio total del pedido asciende a $precio €";
        }
    } else {
        echo "<b style='color:red'>Cantidad errónea</b>";
    }
} else {
    echo "<b style='color:red'>Faltan datos</b>";
}

// Ejercicio 3
echo "<p>Ejercicio 3</p>";
echo "<div class='formulario'>
        <form action='ficheros/fichero_ej_2_6-3.php' method='post'>
        <fieldset>
            <legend>Datos personales</legend>
            Escriba los datos siguientes
            <table>
                <tr>
                    <th>Nombre:</th>
                    <th>Apellidos:</th>
                    <th>Edad:</th>
                </tr>
                <tr>
                    <td><input type='text' name='nombre' value='' /></td>
                    <td><input type='text' name='apellidos' value='' /></td>
                    <td><select name='edad'>
                        <option value='menos de 20 años'>Menos de 20 años</option>
                        <option value='entre 20 y 39 años'>Entre 20 y 39 años</option>
                        <option value='entre 40 y 59 años'>Entre 40 y 59 años</option>
                        <option value='60 años o más'>60 años o más</option>
                    </select></td>
                </tr>
                <tr>
                    <th>Peso:</th>
                    <th>Sexo:</th>
                    <th>Estado Civil:</th>
                </tr>
                <tr>
                    <td><input type='number' name='peso' value='' min='1'/></td>
                    <td>
                        <input type='radio' name='sexo' value='hombre'/> Hombre
                        <input type='radio' name='sexo' value='mujer'/> Mujer
                    </td>
                    <td>
                        <input type='radio' name='estado' value='soltero' style='margin-left:30px'/> Soltero
                        <input type='radio' name='estado' value='casado'/> Casado
                        <input type='radio' name='estado' value='otro'/> Otro
                    </td>
                </tr>
                <tr>
                    <th rowspan='2'>Aficiones:</th>
                    <td><input type='checkbox' name='aficion[]' value='cine' />Cine</td>
                    <td><input type='checkbox' name='aficion[]' value='literatura' /> Literatura</td>
                    <td><input type='checkbox' name='aficion[]' value='tebeos' /> Tebeos</td>

                </tr>
                <tr>
                    <td><input type='checkbox' name='aficion[]' value='deporte' /> Deporte</td>
                    <td><input type='checkbox' name='aficion[]' value='música' /> Música</td>
                    <td><input type='checkbox' name='aficion[]' value='television' /> Televisión</td>
                </tr>
            </table>
            <button type='submit' name='enviar'>Enviar</button>\n\n<button type='reset' name='borrar'>Borrar</button>
        </fieldset>
      </form>
    </div>
";
?>