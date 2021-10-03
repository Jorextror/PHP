<?php

$num1=$_GET["numero1"];
$num2=$_GET["numero2"];

for ($i=0; $i < 11; $i++) { 
    echo $num1, "x", $i, "=". $num1*$i, "<br>"; 
}
echo "<br>";
for ($i=0; $i < 11; $i++) { 
    echo $num2, "x", $i, "=". $num2*$i, "<br>"; 
}
echo "<br>";
echo $num1, "+", $num2, "=". $num1+$num2, "<br>";
echo $num1, "-", $num2, "=". $num1-$num2, "<br>";
echo $num1, "/", $num2, "=". $num1/$num2, "<br>";
echo $num1, "*", $num2, "=". $num1*$num2, "<br>";
echo $num1, "÷", $num2, "=". intdiv($num1, $num2), "<br>";
echo $num1, "%", $num2, "=". $num1%$num2, "<br>";
echo $num1, "^", $num2, "=". $num1**$num2, "<br>";

?>