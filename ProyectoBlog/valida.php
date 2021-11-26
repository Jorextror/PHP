<?php
session_start();
if (isset($_POST["usuari"]) && isset($_POST["pw"])) {
    $pws=$_POST["pw"];
    $usuari=$_POST["usuari"];
    $psswd=FALSE;
    $pw=FALSE;
    if ($usuari=="alumne") {
        $psswd=TRUE;
    }
    if ($pws=='0000') {
        $pw=TRUE;
    }
    if (!$psswd || !$pw) {
        $missatge="Aquest usuari no està registrat a la nostra web o el pasword és incorrecte";
        $_SESSION["missatge"]=$missatge;
        header("Location: index.php");
    }else {
        $_SESSION['usuari']=$usuari;
        header("Location: ex1.php");
        }
}
?>