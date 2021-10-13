<?php
$matriz = [[1,14,8,3],[6,19,7,2],[3,13,4,1]];

function comptarTotalAlumnes($matriz){
    $coun=0;
    foreach ($matriz as $key => $value) {
        $coun=$coun+array_sum($value);
    }
    echo "Total d’alumnes de l’academia: ", $coun,"<br>";
}

function comptarTotalAIdioma($matriz){
    $totalIdiomes = [];
    $totalIdiomes["angles"]=0;
    $totalIdiomes["frances"]=0;
    $totalIdiomes["alemany"]=0;
    $totalIdiomes["rus"]=0;
    foreach ($matriz as $key => $value1) {
        foreach ($value1 as $key1 => $value) {
            echo $key1,"<br>";
            switch ($key1) {
                case 0:
                    $totalIdiomes["angles"]+=$value;
                case 1:
                    $totalIdiomes["frances"]+=$value;
                case 2:
                    $totalIdiomes["alemany"]+=$value;
                case 3:
                    $totalIdiomes["rus"]+=$value;
            }       
        }
    }
    print_r($totalIdiomes);
}

function buscarGrupMesNombros(Type $var = null){
    # code...
}

function buscarGrupMenysNombros(Type $var = null){
    # code...
}

comptarTotalAlumnes($matriz);
echo "<br> pasan cosas malas <br>";
comptarTotalAIdioma($matriz);
?>