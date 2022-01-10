<?php
$a=0;
echo "while <br>";
while ($a < 20) {
    $a++;
    $num_cuadrado = pow($a, 2);
    echo  "$num_cuadrado <br>";
}

echo "<br> for <br>";

for ($i=1; $i < 21; $i++) { 
    $num_cuadradof = pow($i, 2);
    echo  "$num_cuadradof <br>";
}
?>