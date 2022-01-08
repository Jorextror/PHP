<?php
include "conectar.php";
function mostraCategories(){
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);
    $categ=[];
    #select de las categories
    $categories=$mysqli -> query("SELECT nombre FROM categories;");
    #va extraiendo cada categoria para insertarlas en lista
    for ($i=0; $i < $categories -> num_rows; $i++){
        $categ[$i]=mysqli_fetch_row($categories)[0];
    }
    return $categ;
}

function mostraCategoriesNom($id){
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);
    #select de las categories
    $categories=$mysqli -> query("SELECT nombre FROM categories where id=$id;");
    #va extraiendo cada categoria para insertarlas en lista
    return mysqli_fetch_row($categories)[0];
}
?>