<?php
session_start();
$_SESSION["user"]="Jordi";

if (isset($_POST["text"])){
    $text=$_POST["text"];
    $Mayus=0;
    for ($i=0; $i < cont($text); $i++) { 
        if (is_numeric($text[$i])){
            if (ctype_alpha($text[$i])){
                print($text."correcta");
            }
        }else{
            print($text[i]."No és un character o un numero");
        }
    }
}else{
    $salida="Error al introduir character";
}

$_SESSION["salida"]=$salida;
header('Location: index.php');
exit;
?>
