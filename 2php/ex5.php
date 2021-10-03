<?php
/*Fes una funció per comprovar si un string està en minúscules (utilitza només les funcions que hem après a classe)*/
$string="un string està en minúscules";

function minuscules($string){
    return $string != strtoupper($string);
}

if (minuscules($string)){
    echo "Esta en minúscules";
}else {
    echo "Son totes majuscules";
}

?>