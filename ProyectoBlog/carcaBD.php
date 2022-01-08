<?php
session_start();
include "includes/conectar.php";
    $cerca=$_POST["cerca"];

    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $entra=[];
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);
    $entrada=$mysqli -> query("SELECT * FROM entrades where titol LIKE '%$cerca%';");
    for ($i=0; $i < $entrada -> num_rows; $i++){ 
        $entra[$i]=mysqli_fetch_row($entrada);
    }
    $_SESSION["cerca"]=$entra;
    header("Location: index.php");

?>