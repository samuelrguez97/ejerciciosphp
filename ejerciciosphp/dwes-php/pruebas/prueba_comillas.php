<?php
    // Comillas dobles en el valor y dobles en el print: el valor de la variable se muestra.
    $modulo="DWES";
    print "<p>Módulo: $modulo</p>";

    // Comillas dobles en el valor y simples en el print: el valor de la variable no se muestra.
    $modulo="DWES";
    print '<p>Módulo: $modulo</p>';

    // Comillas simples en el valor y dobles en el print: el valor de la variable se muestra.
    $modulo='DWES';
    print "<p>Módulo: $modulo</p>";
?>