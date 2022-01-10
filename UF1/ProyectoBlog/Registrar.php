<?php
include "includes/conectar.php";

session_start();
$servername = "localhost";
$username = "admin";
$pasw = "OEh8lNo#nRZB";
$bd = "blog";
$mysqli = mysqli_connect($servername, $username, $pasw, $bd);

$_SESSION["registrar"]="";
$missatge="";

if (isset($_POST["nom"]) && isset($_POST["cognom"]) && isset($_POST["email"]) && isset($_POST["pasw"])) {
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
        $psw=$_POST["pasw"];
        // var_dump($psw);
        $pswd = password_hash($psw,PASSWORD_BCRYPT, ["cost"=>4]);
        // var_dump(password_verify($psw,$pswd));
        // die;
        $sql = "INSERT INTO usuaris VALUES (null,'$nom','$cognom','$email','$pswd',CURDATE());";
        if ($mysqli -> query($sql) === TRUE){
            $_SESSION["registrar"]="Usuari creat Correctament!";
        }else {
            $_SESSION["registrar"]="Error al crear l'usuari, intenta-ho de nou:   \n".$mysqli->error;
        }
    }else{
        $_SESSION["registrar"]=$missatge;
    }
}
header("Location: index.php");
?>
