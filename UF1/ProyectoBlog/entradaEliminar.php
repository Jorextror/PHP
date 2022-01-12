<?php
    session_start();    
    include "includes/conectar.php";
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);
    $id_entrada=$_GET["id"];
    $userID=$_SESSION["id"];
    $mysqli -> query("DELETE FROM entrades WHERE id=$id_entrada and usuari_id=$userID;");
    header("Location: index.php");
?>