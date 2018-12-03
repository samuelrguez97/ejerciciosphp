<?php
    // Ejercicio 1
    echo "<p style='color:green'>Ejercicio 1</p>";
    $texto = "Hola mundo!";
    print $texto."<br>";
    print "<b>".$texto."</b><br>";
    print "<u>".$texto."</u><br>";
    print "<i>".$texto."</i><br>";

    // Ejercicio 2
    echo "<p style='color:green'>Ejercicio 2</p>";
    $num1 = 12;
    $num2 = 11;
    $suma = $num1 + $num2;
    print "<span>El resultado de la suma es: $suma</span><br>";
    $num1 = 6;
    $num2 = 2;
    $div = $num1 / $num2;
    print "<span>El resultado de la division es: $div</span><br>";
    $cadena1 = "buenos días";
    $cadena2 = "tenga usted";
    print "<span>$cadena1 $cadena2</span>";

    // Ejercicio 3
    echo "<p style='color:green'>Ejercicio 3</p>";
    for($num=0;$num<=10;$num++){
        print $num."<br>";
    }

    // Ejercicio 4
    echo "<p style='color:green'>Ejercicio 4</p>";
    $num = 0;
    $sum = 0;
    while($sum <= 80){
        $sum = $num + $sum;
        if($sum <= 80){
             print $num."<br>";
        }
        $num++;
    }

    // Ejercicio 5
    echo "<p style='color:green'>Ejercicio 5</p>";
    $comprobacion = 0;
    for($num = 0;$num <= 10;$num++){
        $comprobacion = round($num / 2) - $num / 2;
        if($comprobacion == 0){
            print "<span style='color:blue'>$num</span><br>";
        } else {
            print "<span style='color:red'>$num</span><br>";
        }
    }

    // Ejercicio 6
    echo "<p style='color:green'>Ejercicio 6</p>";
    $num=65;
    while($num < 75) {
        print chr($num)."<br>";
        $num++;
    }

    // Ejercicio 7
    echo "<p style='color:green'>Ejercicio 7</p>";
    echo "<table border='1'>";
    $cont = 0;
    for($num = 65;$num < 75;$num++) {
        echo "
            <tr>
              <td>".chr($num)."</td>
              <td>".($cont + 1)."</td>
            </tr>";
        $cont++;
    }
    echo "</table>";

    // Ejercicio 8
    echo "<p style='color:green'>Ejercicio 8</p>";
    echo "<table border='1' style='margin:0 auto;'>";
    for($num=1;$num<=10;$num++){
        echo "
                <tr>
                  <td style='text-align: center;'> 8 x ".$num."</td>
                  <td style='text-align: center;'>".($num * 8)."</td>
                </tr>";
    }
    echo "</table>";

    // Ejercicio 9
    echo "<p style='color:green'>Ejercicio 9</p>";
    setlocale(LC_ALL,"es_ES","esp");
    date_default_timezone_set('Europe/Madrid');
    print "<p>Cuando se cargó esta página eran las ".strftime('%H').":".strftime('%M').":".strftime('%S')." del día ".strftime('%d')." de ".strftime('%B')." del año ".strftime('%Y')."<br>
            Es el dia ".strftime('%j')." del año.</p>";

    // Ejercicio 10
    echo "<p style='color:green'>Ejercicio 10</p>";
    $hora = date('H');
    if ($hora < 18 && $hora >= 15){
        print "Es la hora del café";
    } elseif ($hora < 15 && $hora >= 13) {
        print "Que aproveche la comida";
    } elseif ($hora < 13  && $hora >= 8) {
        print "Buenos días";
    } else {
        print "Buenas noches";
    }

    // Ejercicio 11
    echo "<p style='color:green'>Ejercicio 11</p>";
     echo "Bucle for<br>";
    $suma = 0;
    for ($num= 0 ;$num < 1000;$num++){
       $comprobacion = round($num / 2) - $num / 2;
       if ($comprobacion == 0){
           $suma = $num + $suma;
        }
    }
    print $suma."<br>";

    echo "Bucle while<br>";
    $num = 0;
    $suma = 0;
    while ($num < 1000){
        $comprobacion = round($num / 2) - $num / 2;
        if ($comprobacion == 0){
            $suma = $num + $suma;
        }
        $num++;
    }
   print $suma;
?>
