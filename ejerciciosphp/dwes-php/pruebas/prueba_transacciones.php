<?php
$conexion= new mysqli ('localhost', 'root', '', 'dwes');
$error=$conexion->connect_errno;
if($error==null) {
    // Deshabilitamos el modo transaccional automático
    $conexion->autocommit(false);
    // Iniciamos una transacción
    $sql1='DELETE FROM dwes_tabla WHERE CLAVE = 1';
    $resultado1=$conexion->query($sql1);
    $sql2='UPDATE dwes_tabla SET TELEFONO = 111111111 WHERE CLAVE = 3';
    $resultado2=$conexion->query($sql2);
    if ($resultado1 && $resultado2)
        $conexion->commit(); // Confirma los cambios
        else
            $conexion->rollback(); // Deshacer los cambios
}else{
    print "<p> $error conectando a la Base de datos $conexion->connect_error</p>";
}
?>