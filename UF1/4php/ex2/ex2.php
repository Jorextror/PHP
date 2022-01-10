<?php
session_start();
$salida="";

if (isset($_POST["password"]) && isset($_POST["email"])) {
    $mail=$_POST["email"];
    $password=$_POST["password"];
    $psswd=FALSE;
    $email=FALSE;
    if ($password=="1234") {
        $psswd=TRUE;
    }
    if (preg_match("/@lacetania.cat/i",$mail)==1) {
        $email=TRUE;
    }
    if (!$psswd || !$email) {
        $salida=$salida."Password o email incorrectes";
    }else {
        $salida = $salida."loguejat correctament";
    }
}

$_SESSION["salida"] = $salida;
header("Location: /php/4php/ex2/ex1.php");
?>