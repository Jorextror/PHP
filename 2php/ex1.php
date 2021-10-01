<?php
/*Fes una funció per calcular el factorial d’un número (utilitzant un bucle) que passem per URL.*/

function facturial(int $num)
{
    $total=1;
    for ($i=1; $i <= $num; $i++) {
        $total=$total*$i;
    }
    echo $total;
}

if (isset($_GET['num'])){
    // http://localhost/php/2%20php/ex1.php/?num=4
    $num=(int) $_GET['num'];
    facturial($num);
} else {
    echo "No has passat cap paràmetre per la URL<br/>";
}
?>