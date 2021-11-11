<?php
session_start();
if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['passw'])) {
    $nom = $_POST['nom'];
    $passw = $_POST['passw'];
    $mail = $_POST['mail'];

    if (!preg_match("/^[A-Za-z ]+$/",$nom)) {
        $_SESSION["missatge"]["nom"]="Nom només lletras sisplau";
    }else{
        $_SESSION["missatge"]["nom"]="";
    }

    if (!preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z+*-]{8,}$/",$passw)){
        $_SESSION["missatge"]["passw"]="Contrasenya no apta(8 caràcters mínims, una:(mayus,minuscula,enter,carct especial(-/*+)))";
    }else{
        $_SESSION["missatge"]["passw"]="";
    }

    if (!(empty($_POST['formacio']))) {
        $formacio = $_POST['formacio'];
    }
    if (isset($_POST['idiomas']) && $_POST['idiomas'] == '1' || $_POST['idiomas'] == '0' ){
        $idiomas = $_POST['idiomas'];
        $_SESSION["missatge"]["idiomas"]="a";
    }else{
        // $_SESSION["missatge"]["idiomas"]="Nomes es pot escollir un idioma";
        $_SESSION["missatge"]["idiomas"]=$idiomas;
    }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $_SESSION["missatge"]["mail"]="Mail no existeix";
    }else{
        $_SESSION["missatge"]["mail"]="";
    }

    if (!(empty($_POST['web']))){
        $web = $_POST['web'];
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)) {
            $_SESSION["missatge"]["web"]="web URL invàlid";
        }else{
            $_SESSION["missatge"]["web"]="";
        }
    }
}else{
    if($_POST['nom']==""){
        $_SESSION["missatge"]["nom"]="Nom obligatori";
    }
    if(!isset($_POST['passw'])){
        $_SESSION["missatge"]["passw"]="Contrasenya obligatoria";
    }
    if(!isset($_POST['mail'])){
        $_SESSION["missatge"]["mail"]="Mail obligatori";
    }
}
// session_destroy();
header("Location:index.php");
?>