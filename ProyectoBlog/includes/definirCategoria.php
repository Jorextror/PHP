<?php
function GetCategoria($id){
    include "conectar.php";
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $password, $bd);
    $categoria=$mysqli -> query("SELECT nombre FROM categories WHERE id=$id;");
    return mysqli_fetch_row($categoria)[0];
}
function GetCategoriaNom($nom){
    include "conectar.php";
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $password, $bd);
    $categoriaNom=$mysqli -> query("SELECT id FROM categories WHERE nombre=$nom;");
    // return mysqli_fetch_row($categoriaNom)[0];
    return $categoriaNom;
}
?>