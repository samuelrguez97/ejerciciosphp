<?php
function validarCorreo($correo){
    if(strstr($correo, "@") && strstr($correo, ".")) {
        if(mb_substr_count($correo, "@") == 1) {
            $parte_despues_arroba = substr($correo, strpos($correo, "@"), strlen($correo));
            $puntos_despues_arroba = substr_count($parte_despues_arroba, ".");
            if($puntos_despues_arroba > 1) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>