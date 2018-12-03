<?php
include("../cabecera_html.php");


// Ejercicio 1
echo "<p>Ejercicio 1</p>";
echo "<h1>Calcula letra DNI - Formulario</h1>";
echo "<form action='ficheros/fichero_ej_2_5-1.php' method='post'>
        Escribe el número del dni y te indicaré que letra le corresponde: <br><br>
        DNI: <input type='number' name='dni' value='' max='8' min='8' required='required'/>
        <button type='submit' name='enviar'>Calcular</button>
      </form>
";

// Ejercicio 2
echo "<p>Ejercicio 2</p>";
echo "<h1>Tabla numerada - Formulario</h1>";
echo "<form action='ficheros/fichero_ej_2_5-2.php' method='post'>
        Escriba dos números y dibujaré una tabla con el número de columnas (menor o igual que 10)<br>
        que indique y con  las primeras celdas numeradas (numero entero).<br><br>
        <table>
            <tr>
                <th>Número de celdas numeradas: </th>
                <td><input type='number' name='n' value='' /></td>
            </tr>
            <tr>
                <th>Número de columnas: </th>
                <td><input type='number' name='col' value=''/></td>
            </tr>
        </table><br>
        <button type='submit' name='enviar'>Escribir</button>\n<button type='reset' name='borrar'>Borrar</button>
      </form>
";

// Ejercicio 3
echo "<p>Ejercicio 3</p>";
echo "<h1>Calcular año bisiesto - Formulario</h1>";
echo "<form action='ficheros/fichero_ej_2_5-3.php' method='post'>
        Escribe un año (menor que 10.000) y calculare si es bisiesto o no: <br><br>
        <table>
            <tr>
                <th>Año: </th>
                <td><input type='number' name='anio' value='' required='required'/></td>
            </tr>
        </table><br>
        <button type='submit' name='enviar'>Escribir</button>\n<button type='reset' name='borrar'>Borrar</button>
      </form>
";

// Ejercicio 4
echo "<p>Ejercicio 4</p>";
echo "<h1>Convertidor de temperaturas Celsius / Fahrenheit - Formulario</h1>";
echo "<form action='ficheros/fichero_ej_2_5-4.php' method='post'>
        Escribe una temperatura en grados Celsius o Fahrenheit y la convertirá a la otra unidad (Fahrenheit o Celsius): <br><br>
        <table>
            <tr>
                <th>Temperatura: </th>
                <td><input type='number' name='temp' value='' required='required'/></td>
                <td><select name='unidad'>
                        <option value='Celsius' selected='selected'>Celsius</option>
                        <option value='Fahrenheit'>Fahrenheit</option>
                    </select>
                </td>
            </tr>
        </table><br>
        <button type='submit' name='enviar'>Escribir</button>\n<button type='reset' name='borrar'>Borrar</button>
      </form>
";

// Ejercicio 5
echo "<p>Ejercicio 5</p>";
echo "<h1>Comprobar email - Formulario</h1>";
echo "<form action='ficheros/fichero_ej_2_5-5.php' method='post'>
        <table>
            <tr>
                <th>email: </th>
                <td><input type='text' name='email' value='' required='required'/></td>
            </tr>
        </table><br>
        <button type='submit' name='enviar'>Comprobar</button>
      </form>
";

// Ejercicio 6
echo "<p>Ejercicio 6</p>";
echo "<h1>Adivinar número - Formulario</h1>";
echo "<form action='ficheros/fichero_ej_2_5-6.php' method='post'>
        Intenta adivinar que número he generado:<br><br>
        <table>
            <tr>
                <th>Introduce número entre 1 y 10: </th>
                <td><input type='number' name='num' value='' required='required'/></td>
            </tr>
        </table><br>
        <button type='submit' name='enviar'>Comprobar</button>
      </form>
";

// Ejercicio 7
echo "<p>Ejercicio 7</p>";
echo "<h1>Botón de opción - Formulario</h1>";
echo "<form action='ficheros/fichero_ej_2_5-7.php' method='post'>
        Indique su sexo:<br><br>
        <input type='radio' name='sexo' value='hombre' /> Hombre
        <input type='radio' name='sexo' value='mujer' /> Mujer
        <br><br>
        <button type='submit' name='enviar'>Comprobar</button>
      </form>
";

// Ejercicio 8
echo "<p>Ejercicio 8</p>";
echo "<h1>Casillas de verificación - Formulario</h1>";
echo "<form action='ficheros/fichero_ej_2_5-8.php' method='post'>
        Indique sus aficiones:<br><br>
        <b>Aficiones:\n</b>
        <input type='checkbox' name='aficion[]' value='1' /> Cine
        <input type='checkbox' name='aficion[]' value='2' /> Literatura
        <input type='checkbox' name='aficion[]' value='3' /> Música
        <br><br>
        <button type='submit' name='enviar'>Comprobar</button>
      </form>
";

?>