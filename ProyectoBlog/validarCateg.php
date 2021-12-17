<?php
    session_start();
    include "includes/conectar.php";
    $_SESSION["categ"]="";

    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);

    if (isset($_POST["categ"])){
        if (!preg_match("/^[A-Za-z ]+$/",$_POST["categ"])) {
            $_SESSION["categ"]="La categoria només acepta lletras";
        }else{
            include "includes/mostraCategories.php";
            $categ=mostraCategories();
            $newcateg=ucfirst(strtolower($_POST["categ"])); #convierte en lowercase y despus la primera en uppercase
            if (in_array($newcateg, $categ)){
                $_SESSION["categ"]="Esta Categoria ja existeix";
            }else{
                $sql = "INSERT INTO categories VALUES (null,'$newcateg');";
                if ($mysqli -> query($sql) === TRUE){
                    $_SESSION["categ"]="Categoria creat Correctament!";
                }else {
                    $_SESSION["categ"]="Error al crear l'Categoria, intenta-ho de nou: \n".$mysqli->error;
                }
            }
        }
    }
header("Location: CrearCateg.php");
?>