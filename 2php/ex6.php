<?php
//Fes una funció per comprovar si un string és un palíndrom o no.

$string = "anna";

function palindrom($string){
    return $string == strrev($string);
}

if (palindrom($string)){
    echo "Palíndrom";
}else {
    echo "No palíndrom";
}
?>