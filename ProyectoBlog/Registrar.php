<?php
include "includes/conectar.php";

session_start();
$servername = "localhost";
$username = "admin";
$pasw = "OEh8lNo#nRZB";
$bd = "blog";
$mysqli = mysqli_connect($servername, $username, $pasw, $bd);

$_SESSION["missatge"]="";
$missatge="";

if (isset($_POST["nom"]) && isset($_POST["cognom"]) && isset($_POST["email"]) && isset($_POST["pasw"])) {
    echo("asfsa");
    //nom
    if (!preg_match("/^[A-Za-z ]+$/",$_POST["nom"])) {
        $missatge="Nom només lletras sisplau";
    }
    //cognom
    if (!preg_match("/^[A-Za-z ]+$/",$_POST["cognom"])) {
        $missatge="Nom només lletras sisplau";
    }
    //mail
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $missatge="Mail no existeix";
    }
    // passw
    if (!preg_match("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}",$_POST["pasw"])){
        $missatge="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres";
    }
    if ($missatge=="") {
        $nom = $_POST['nom'];
        $cognom = $_POST["cognom"];
        $email = $_POST["email"];
        $psw = strval(password_hash($_POST["psw"],PASSWORD_DEFAULT));
        $sql = "INSERT INTO usuaris VALUES (null,'$nom','$cognom','$email','$psw',CURDATE());";
        if ($mysqli -> query($sql) === TRUE){
            $_SESSION["missatge"]="Usuari creat Correctament!";
        }else {
            $_SESSION["missatge"]="Error al crear l'usuari, intenta-ho de nou:   \n".$mysqli->error;
        }
    }else{
        $_SESSION["missatge"]=$missatge;
    }
}
header("Location: index.php");
?>
