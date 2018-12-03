<?php
    // Ejercicio 1
    echo "<p style='color:green'>Ejercicio 1</p>";
    $nombre = 'Samuel';
    $apellidos = 'Rodriguez Aguilar';
    $edad = '21';
    print "<p>Mi nombre es:<br>
              $nombre $apellidos y tengo $edad años<br>
              Mi apodo es: 'Txirry'
           </p>";

    // Ejercicio 2
    echo "<p style='color:green'>Ejercicio 2</p>";
    $resultado = 125 * 0.3;
    print "<p>El porcentaje 30% de 125 es: $resultado</p>";

    // Ejercicio 3
    echo "<p style='color:green'>Ejercicio 3</p>";
    $alto = 10.5;
    $ancho = 5.2;
    $precio_pintura = 20;
    $superficie = $alto * $ancho;
    $precio_pintura_total = $precio_pintura * $superficie;
    print "<p>El pintor ha de invertir $precio_pintura_total € para pintar una pared de $alto de alto por $ancho de ancho.</p>";

    // Ejercicio 4
    echo "<p style='color:green'>Ejercicio 4</p>";
    $p_pantalones = 60;
    $p_chaquetas_rojas = 70;
    $p_chaquetas_azules = 90;
    $p_jerseis = 25;
    $p_calcetines = 6;
    $n_pantalones = 6;
    $n_chaquetas_rojas = 8;
    $n_chaquetas_azules = 4;
    $n_jerseis = 6;
    $n_calcetines = 9;
    $total = ($p_pantalones * $n_pantalones) + ($p_chaquetas_rojas * $n_chaquetas_rojas) + ($p_chaquetas_azules * $n_chaquetas_azules) + ($p_jerseis * $n_jerseis) + ($p_calcetines * $n_calcetines);
    $promedio = ($n_pantalones + $n_chaquetas_rojas + $n_chaquetas_azules + $n_jerseis + $n_calcetines) / 5;
    print "<p>Total ganado en el día es $total €</p>";
    print "<p>El promedio por prenda es $promedio</p>";

    // Ejercicio 5
    echo "<p style='color:green'>Ejercicio 5</p>";
    $contador = 1;
    $mul_3 = 0;
    $mul_5 = 0;
    while($contador <= 30) {
        $comprobacion_3 = round($contador / 3) - $contador / 3;
        $comprobacion_5 = round($contador / 5) - $contador / 5;
        if($comprobacion_3 == 0){
            $mul_3++;
        }
        if($comprobacion_5 == 0){
            $mul_5++;
        }
        $contador++;
    }
    print "<p>En los primeros 30 numeros naturales hay $mul_3 numeros multipos de tres y $mul_5 numero multiplos de 5.</p>";

    // Ejercicio 6
    echo "<p style='color:green'>Ejercicio 6</p>";
    setlocale(LC_ALL, 'es_ES' ,'esp');
    $dia = date("d");
    $dia_letras = strftime("%A");
    print "<p>Hoy es $dia y es $dia_letras</p>";

    // Ejercicio 7
    echo "<p style='color:green'>Ejercicio 7</p>";
    $numeros = array(10, 2, 25, 5, 47, 3, 6, 4, 12, 32);
    $mayor = 0;
    foreach($numeros as $num) {
        if($num > $mayor) {
            $mayor = $num;
        }
    }
    echo "El mayor es $mayor";

    // Ejercicio 8
    echo "<p style='color:green'>Ejercicio 8</p>";
    $cadena1 = "abccbauyg";
    $cadena2 = "12345678";
    echo "<table border=1px>
            <tr>
                <td>".substr_replace($cadena1, $cadena2, 2)."</td>
            </tr>
            <tr>
                <td>".substr_replace($cadena1, $cadena2, 2, 2)."</td>
            </tr>
            <tr>
                <td>".substr_replace($cadena1, $cadena2, -1)."</td>
            </tr>
            <tr>
                <td>".substr_replace($cadena1, $cadena2, -2, 3)."</td>
            </tr>
         </table>"
?>