<?php
    session_start();
    include "includes/conectar.php";

    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";

    $_SESSION["missatge"]="";
    unset($_SESSION['registrar']);//para que deje de mostrar el usuario creado en registrar
    // crear connection
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);
    // check connection
    if (!$mysqli){
        die("Connection failed: ". mysqli_connect_error());
    }

    if (isset($_POST["pasw"]) && isset($_POST["email"])) {
        $email = $_POST["email"];
        $pasw = $_POST["pasw"];
        // busquem l'usuari que tingui aquest mail en la taula usuaris
        $login=$mysqli -> query("SELECT * FROM usuaris WHERE email='$email';");
        // comprovem que hi sigui
        if($login && mysqli_num_rows($login)==1) {
            // fa un array associatiu del usuari
            $usuari = mysqli_fetch_assoc($login);
            // ara ja podem comprovar el password
            if (password_verify($pasw,$usuari['password'])) {
                $_SESSION["login"]=1;
                $_SESSION['nom']=$usuari['nom'];
                $_SESSION['cognom']=$usuari['cognom'];
                $_SESSION["email"]=$usuari["email"];
                $_SESSION["id"]=$usuari["id"];
            }else {
                $_SESSION["missatge"]="No concide o no existe el usuario o contraseña";
            }
        }else {
            $_SESSION["missatge"]="No concide o no existe el usuario o contraseña1";
        }
    }
    header("Location: index.php");
?>