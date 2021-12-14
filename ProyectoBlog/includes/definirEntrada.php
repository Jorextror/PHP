<?php
include "conectar.php";
function GetCategoria($id){
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $password, $bd);
    $categoria=$mysqli -> query("SELECT nom FROM entrades WHERE id=$id;");
    return mysqli_fetch_row($categoria)[0];
}
?>