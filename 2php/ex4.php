<?php
/*Fes una pàgina on a partir d’un formulari on es recull una temperatura i en quina escala està, ens la la conversió.*/

function conversio($Grados,$Grados2,$num){
    $conv=$Grados.$Grados2;
    if ($conv=="FahrenheritCelsius"){
        $conversio = ( $num - 32) * 5 / 9;
    }else if ($conv=="FahrenheritKelvin") {
        $conversio = ( $num - 32 )  * 5 / 9 + 273.15;
    } else if ($conv=="CelsiusFahrenherit") {
        $conversio = ($num - 273.15) * 9 / 5 + 32;
    } else if ($conv=="CelsiusKelvin") {
        $conversio = $num + 273.15;
    } else if ($conv=="KelvinFahrenherit") {
        $conversio = ($num - 273.15) * 9 / 5 + 32;
    } else if ($conv=="KelvinCelsius") {
        $conversio = $num - 273.15 ;
    } else {
        $conversio="error";
    }
    echo $num." º".$Grados." = ".$conversio." º".$Grados2;
}

//revisa Get
if (isset($_GET['Grados']) && isset($_GET['Grados2']) && isset($_GET['num'])){
    $Grados= $_GET['Grados'];
    $Grados2= $_GET['Grados2'];
    $num=floatval($_GET['num']);
} else {
    echo "No has passat cap paràmetre per la URL <br/>";
}

conversio($Grados,$Grados2,$num);
?>