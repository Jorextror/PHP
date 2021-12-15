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
        // var_dump($pasw);
        // busquem l'usuari que tingui aquest mail en la taula usuaris
        $login=$mysqli -> query("SELECT * FROM usuaris WHERE email='$email';");
        // comprovem que hi sigui
        if($login && mysqli_num_rows($login)==1) {
            // fa un array associatiu del usuari
            $usuari = mysqli_fetch_assoc($login);
            var_dump($usuari['password']);
            $_SESSION["usuari"]=$usuari['nom']." ".$usuari['cognom'];
            // ara ja podem comprovar el password
            // print_r($usuari['password']);
            var_dump(password_verify($pasw,$usuari['password']));
            if (password_verify($pasw,$usuari['password'])) {
                echo("pass corr");
                $_SESSION["login"]=1;
            }else {
                $_SESSION["missatge"]="No concide o no existe el usuario o contraseña";
            }
        }else {
            $_SESSION["missatge"]="No concide o no existe el usuario o contraseña1";
        }
    }
    header("Location: index.php");
?>