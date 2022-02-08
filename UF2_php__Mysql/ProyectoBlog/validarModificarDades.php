<?php
    session_start();
    include "includes/conectar.php";
    $_SESSION["entra"]="";

    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);

    $nom=$_POST["nom"];
    $cognom=$_POST["cognom"];
    $email=$_POST["email"];

    $Qemail=$mysqli -> query("SELECT email FROM usuaris WHERE email='$email';");
    $Qemail=mysqli_fetch_row($Qemail)[0];
    if ($Qemail == $email){
        $_SESSION["modi"]="Ya existeix email";
    }else{
        $sql ="UPDATE usuaris SET ".
        "nom='$nom', ". 
        "cognom='$cognom',". 
        "email='$email' ". 
        "WHERE id = ".$_SESSION['id'];

        $desarBD = mysqli_query($db, $sql);

        if ($mysqli -> query($sql) === TRUE){
            $_SESSION["modi"]="Modificat Correctament!";
        }else {
            $_SESSION["modi"]="Error al Modificar dades, intenta-ho de nou: \n".$mysqli->error;
        }
    }
    header("Location: modificarDades.php");
?>