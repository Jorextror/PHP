<?php
    session_start();

include 'includes/header.php';

$arraySencers=[]; // l'array de sencers és global
$aEn = []; // l'array associatiu també és global
 
function generaArray($mida) {
    for ($i=0;$i<$mida;$i++) {
        $num_aleatorio = rand(100,999);
        $arraySencers[] = $num_aleatorio;
    }
    return($arraySencers); //no se que me pasa, que parece que no se hacer variables globales ahora :(

}
$arraySencers = generaArray(100);
print_r($arraySencers);

function printArray($a) {

}
printArray($arraySencers);

function acabaEn($a) {
    $values=[];
    foreach ($a as $key => $value) {
        $numEn = str_split($value);
        if ($key == $numEn){
            $values = array_count_values($a);

        }
    }
    print_r($values);

}
acabaEn($arraySencers);

function mostraAcabaEn($aEn) {

}
function numGET() {
    echo'<a href="test_get.php?num=123">Test $GET</a>';
    if (isset($_GET['num'])){
        $num =(int) $_GET['num'];
        if ($num >= 100){
            // $arraySencers=[] = $num;
            // $aEn=[] = $num;
        }
    }else{
        echo"Necesita 3 xifras numerics";
    }
}
numGET();


if (!isset($_SESSION["usuari"])){
    $missatge="On vas?? Primer t’has  de registrar";
    $_SESSION["missatge"]=$missatge;
    header("Location: index.php");
}

?>