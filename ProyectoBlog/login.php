<?php
    session_start();
    include "includes/conectar.php";

    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);

    if (isset($_POST["pasw"]) && isset($_POST["email"])) {
        $email = $_POST["email"];
        $password = $_POST["pasw"]; 
        $login=$mysqli -> query("SELECT * FROM usuaris WHERE email='$email';");
        if($login && mysqli_num_rows($login)==1) {
            $usuari = mysqli_fetch_assoc($login);
            $_SESSION["usuari"]=$usuari['nom']." ".$usuari['cognom'];
            if (password_verify($password,$usuari['password'])) {
                $_SESSION["login"]=1;
            }else {
                $_SESSION["missatge"]="No concide o no existe el usuario o contraseña";
            }
        }else {
            $_SESSION["missatge"]="No concide o no existe el usuario o contraseña";
        }
    }
    header("Location: index.php");
?>