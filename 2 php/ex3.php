<?php
/* Utilitzant un array de 2 dimensions amb el mesos i el nombre de dies corresponent. 
Fes una funció que donat un mes que passem per get ens digui quants dies té. 
Les dades provindran d’un formulari on amb un select tries el mes.*/

function diesmes(num1){

}

//revisa Get
if (isset($_GET['num1']) ){
    // http://localhost/php/2%20php/ex3.php/?num1=4
    $num1=(int) $_GET['num1'];
} else {
    echo "No has passat cap paràmetre per la URL <br/>";
}

?>