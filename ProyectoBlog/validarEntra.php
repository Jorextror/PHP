<?php
    session_start();
    include "includes/conectar.php";
    $_SESSION["entra"]="";

    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);

    if (isset($_POST["titol"]) && isset($_POST["desc"])){
        if (!preg_match("/^[A-Za-z ]+$/",$_POST["titol"])) {
            $_SESSION["titol"]="El titol només acepta lletras";
        }else{
            $userid=$_SESSION["nomid"];
            $categ=$_POST["categ"];
            $titol=$_POST["titol"];
            $desc=$_POST["desc"];
            include "includes/definirCategoria.php";
            $categid=GetCategoriaNom($categ);
            echo($categid);
            $sql = "INSERT INTO entrades VALUES (null,'$userid','$categid','$titol','$desc',CURDATE());";
            if ($mysqli -> query($sql) === TRUE){
                $_SESSION["entra"]="Entrada creat Correctament!";
            }else {
                $_SESSION["entra"]="Error al crear l'entrada, intenta-ho de nou: \n".$mysqli->error;
            }
        }
    }
// header("Location: CrearEntra.php");
?>