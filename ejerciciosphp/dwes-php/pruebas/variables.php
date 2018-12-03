<DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title> Variables superglobales PHP </title>
  </head>
  <body>
    <?php
        echo 'Script que se esta ejecutando actualmente '.$_SERVER['PHP_SELF'].'<br />';
        echo 'Direccion IP del servidor '.$_SERVER['SERVER_ADDR'].'<br />';
        echo 'Nombre del servidor '.$_SERVER['SERVER_NAME'].'<br />';
        echo 'Directorio raíz bajo el que se ejecuta el script '.$_SERVER['DOCUMENT_ROOT'].'<br />';
        echo 'IP desde la que el usuario esta viendo la página '.$_SERVER['REMOTE_ADDR'].'<br />';
        echo 'Método utilizado para acceder a la página ("GET", "HEAD","POST" o "PUT") '.$_SERVER['REQUEST_METHOD'].'<br />';
    ?>
  </body>
</html>
