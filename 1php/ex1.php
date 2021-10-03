<?php

echo "1) string:<br>";
$string="hola";
echo "$string <br><br>";

echo "2) entero: <br>";
$enter=6;
echo "$enter <br><br>";

echo "3) float: <br>";
$float=3.3;
echo "$float <br><br>";

echo "4) booleans: <br>";
$booleans=true;
echo "$booleans <br><br>";

echo "5) array: <br>";
$a = array(
    "fuet" => "pan",
    "pan" => "fuet"
);
echo $a['fuet'],"<br><br>";

echo "6) null: <br>";
$null=null;
echo "$null <br><br>";

echo "7) iterable: <br>";
function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    } 
}
echo "<br>";

echo "8) callbacks";
$myfunction = function($a):int{
    return $a+2;
 };
 $b = array_map($myfunction, [1,2,3,4]);
 foreach($b as $c){
     echo "$c<br/>";
 }
 echo "<br>";

 echo "9) objects<br>";
 class obj {
     private $manzanas = 5;
 
     function mostrar()
     {
         echo "tengo $this->manzanas manzanas"; 
     }
     public function setManzanas($nro){
         $this->manzanas = $nro;
     }
 }
 
 $miObject= new obj;
 $miObject->mostrar();
 echo "<br><br>";

 echo "10) type juggling<br>";
 $foo = "0";  // $foo es string (ASCII 48)
 echo "$foo <br>";
 $foo += 2;   // $foo es ahora un integer (2)
 echo "$foo <br>";
?>