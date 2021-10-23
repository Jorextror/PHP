<?php
/*Primer, la pàgina 2 ha de recollir la dada enviat pel formulari de la pàgina 1. 
És el procediment habitual: per POST; cal una  variable per recollir la dada; 
variable auxiliar que indica la correcció de la dada; comprovació i missatges d'error; 
si la dada és correcte, missatge final.*/
session_start();
$_SESSION["user"]="Jordi";
// $text=$_POST["fname"];

if (isset($_POST["fname"])){
    $text=$_POST["fname"];
    $acaba=False;
    $len=strlen($text);
    $i=0;
    //bucle while para no hacer un breack en un for, para cuando detecte un signo.
    while (!$acaba) {
        if (is_numeric($text[$i])){
            $salida = $text." correcta1";
        }elseif (ctype_alpha($text[$i])){
            $salida = $text." correcta";
            //si es letra
            if ($len==1) {
                if ($text === strtoupper($text)) {
                    $salida = $salida."<br>Té una única paraula en majúscules";
                    $acaba=TRUE;
                    //compara la letra en mayuscula si es igual a la que esta sin convertir en mayus para saber si lo es
                }
            }
        }else{
            $salida = $text[$i]." No és una letra o un numero";
            $acaba=TRUE;
        }
        $i++;
        if ($i == strlen($text)) {
            $acaba=TRUE;
        }
    }
}else{
    $salida="Error al introduir character";
}

$_SESSION["salida"]=$salida;
header('Location: index.php');
exit;
?>