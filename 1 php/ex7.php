<?php

$num1=$_GET["numero1"];
$num2=$_GET["numero2"];
$inici=0;
$final=0;

if ($num1 < $num2) {
    $inici=$num1;
    $final=$num2;
    }
elseif ($num1 > $num2) {
    $inici=$num2;
    $final=$num1;
}
else {
    echo "son iguals els números";
}

for ($i=$inici+1; $i < $final; $i++) { 
    if ($i %2 != 0) {
        echo $i," ";
    }
}

?>