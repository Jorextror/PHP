<?php
/*Fes una funció per calcular l’àrea d’un rectangle, tenint en compte que la mida dels costats es passa per get. 
Fes una versió amb echo dins la funció i una altra amb  return.*/

//funciones
function areaR(int $num1, int $num2){
    echo($num1*$num2);
}

function areaRR(int $num1, int $num2){
    return $num1*$num2;
}
//revisa Get
if (isset($_GET['num1']) and isset($_GET['num2'])){
    // http://localhost/php/2%20php/ex2.php/?num1=4&num2=2
    $num1=(int) $_GET['num1'];
    $num2=(int) $_GET['num2'];
} else {
    echo "No has passat cap paràmetre per la URL<br/>";
}
//Programa Principal
areaR($num1,$num2);
echo("<br>");
echo(areaRR($num1,$num2));
?>