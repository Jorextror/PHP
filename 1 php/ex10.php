<?php

$np=$_GET["num"];

function primo($prime){
    for($i = 2; $i < $prime; $i++){
        if ($prime % == $i 0){
            return false;
        }
    }
    return true;
}

if(primo($np)){
    echo "El numero $np es primo";
    }
    else {
        echo "El numero $np No es primo";
    }

?>