<?php
    session_start();    
    include "conectar.php";
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);
    $id=$_GET["id"];
    $userID=$_SESSION["id"];
    $mysqli -> query("delete FROM entrades where id=$id and usuari_id=$userID;");
    header("Location: index.php");
?>