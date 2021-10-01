<?php
/*Fes una pàgina on a partir d’un formulari on es recull una temperatura i en quina escala està, ens la la conversió.*/



//revisa Get
if (isset($_GET['num']) ){
    // http://localhost/php/2%20php/ex3.php/?num=1
    $mes=(int) $_GET['num'];
} else {
    echo "No has passat cap paràmetre per la URL <br/>";
}

?>