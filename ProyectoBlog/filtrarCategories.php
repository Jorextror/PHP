<?php
session_start();
    if(isset($_GET["id"])){
        $_SESSION["filtre"]=$_GET["id"];
    }

header("Location: index.php");
?>