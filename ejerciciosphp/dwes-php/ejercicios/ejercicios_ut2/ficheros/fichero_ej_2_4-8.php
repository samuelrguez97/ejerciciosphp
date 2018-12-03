<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<style>
    table {
    margin: 0 auto;
    border: 5px solid lightblue;
    }
    caption {
    font-size: xx-large;
    color: lightblue;
    border: 1px solid;
    width: 500px;
    margin: 0 auto;
    }
</style>
<head>
  <meta http-equiv="refresh" content="5" />
</head>
<body>
<?php
$frutas = array("manzana.jpg", "fresa.jpg", "grosella.jpg", "guayaba.jpg", "kiwi.jpg", "pera.jpg", "naranja.jpg", "melocoton.jpg");
shuffle($frutas);
echo "<table>";
echo "<caption>Refresca frutas cada 5 segundos</caption>";
echo "<tr>
          <td><img src=../Frutas/$frutas[0]></td>
          <td><img src=../Frutas/$frutas[1]></td>
          <td><img src=../Frutas/$frutas[2]></td>
          <td><img src=../Frutas/$frutas[3]></td>
      </tr>
      <tr>
          <td><img src=../Frutas/$frutas[4]></td>
          <td><img src=../Frutas/$frutas[5]></td>
          <td><img src=../Frutas/$frutas[6]></td>
          <td><img src=../Frutas/$frutas[7]></td>
      </tr>";
echo "</table>";
?>
</body>
</html>