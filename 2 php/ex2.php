<?php
/*Fes una funció per calcular l’àrea d’un rectangle, tenint en compte que la mida dels costats es passa per get. 
Fes una versió amb echo dins la funció i una altra amb  return.*/

function areaR(int $num)
{
    # code...
}

if (isset($_GET['num'])){
    // http://localhost/php/2%20php/ex1.php/?num=4
    $num=(int) $_GET['num'];
    areaR($num);
} else {
    echo "No has passat cap paràmetre per la URL<br/>";
}
?>