<?php
session_start();

if  (isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['passw'])) {
    $nom = $_POST['nom'];
    $passw = $_POST['passw'];
    $mail = $_POST['mail'];

    if (!(preg_match ("/[A-Za-z ]+/",$nom))) {
        $_SESSION["missatge"]["nom"]="Nom nomes letras sisplau";
    }else{
        $_SESSION["missatge"]["nom"]="Nom correcte";
    }
    if (!preg_match("/^(?=.?[a-zA-Z])(?=.?[0-9])(?=.?[-+]).{8,}$/i",$passw)){
        $_SESSION["missatge"]["passw"]="Contrasenya no apta(8 caracts minims, una:(mayus,minuscula,enter,carct especial(-/*+)))";
    }

    if (!(empty($_POST['formacio']))) {
        $formacio = $_POST['formacio'];
    }

    if (!(isset($_POST['idiomas']) && $_POST['idiomas'] == '1')){
        $idiomas = $_POST['idiomas'];
    
    }

    if (!(preg_match($mail, FILTER_VALIDATE_EMAIL))){
        $_SESSION["missatge"]["mail"]="Mail no existeix";
    }
    if (!(empty($_POST['web']))){
        $web = $_POST['web'];
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)) {
            $_SESSION["missatge"]["web"]="web URL invalid";
        }        
    }
        
} else {
    if  (!isset($_POST['nom'])){
        $_SESSION["missatge"]["nom"]="Nom obligatori";
    }
    if  (!isset($_POST['passw'])){
        $_SESSION["missatge"]["passw"]="Contrasenya obligatori";
    }
    if  (!isset($_POST['mail'])){
        $_SESSION["missatge"]["mail"]="Mail obligatori";
    }
}
header("Location:index.php");
?>