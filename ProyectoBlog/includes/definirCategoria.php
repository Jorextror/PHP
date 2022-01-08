<?php
function GetCategoria($id){
    include "conectar.php";
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $password, $bd);
    $categoria=$mysqli -> query("SELECT nombre FROM categories WHERE id=$id;");
    return mysqli_fetch_row($categoria);
}
function GetCategoriaId($nom){
    include "conectar.php";
    $categ=[];
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $password, $bd);
    $categoriaId=$mysqli -> query("SELECT * FROM categories;");# WHERE nombre=$nom;");
    for ($i=0; $i < $categoriaId -> num_rows; $i++){
        $categ[$i]=mysqli_fetch_row($categoriaId)[0];
    }
    return $categ;
}
?>