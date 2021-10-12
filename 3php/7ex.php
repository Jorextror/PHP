<?php
$matriz = [[1,14,8,3],[6,19,7,2],[3,13,4,1]];

function comptarTotalAlumnes($matriz){
    $coun=0;
    foreach ($matriz as $key => $value) {
        $coun=$coun+array_sum($value);
    }
    echo "total d’alumnes de l’academia: ", $coun;
}

comptarTotalAlumnes($matriz);
?>