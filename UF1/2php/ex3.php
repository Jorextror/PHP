<?php
/* Utilitzant un array de 2 dimensions amb el mesos i el nombre de dies corresponent. 
Fes una funció que donat un mes que passem per get ens digui quants dies té. 
Les dades provindran d’un formulari on amb un select tries el mes.*/

$mesos=[[31,"Gener"],[28,"Febrer"],[31,"Marzo"],[30,"abril"],[31,"mayo"],[30,"junio"],[31,"juliol"],[31,"agosto"],[30,"septiembre"],[31,"octubre"],[30,"noviembre"],[31,"diciembre"]];

function diesmes($mes, $mesos){
    $mesNum=$mesos[$mes][0];
    $mesLetra=$mesos[$mes][1];
    echo("$mesLetra tiene  $mesNum dias.");
}

//revisa Get
if (isset($_GET['mes']) ){
    // http://localhost/php/2%20php/ex3.php/?mes=1
    $mes=(int) $_GET['mes'];
} else {
    echo "No has passat cap paràmetre per la URL <br/>";
}

diesmes($mes, $mesos);

?>