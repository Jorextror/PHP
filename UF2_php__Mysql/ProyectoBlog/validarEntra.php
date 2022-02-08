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
            $_SESSION["entra"]="El titol només acepta lletras";
        }else{
            $userID=$_SESSION["id"];
            $categ=$_POST["categ"];
            $titol=$_POST["titol"];
            $desc=$_POST["desc"];
            include "includes/definirCategoria.php";
            $categid=GetCategoriaId($categ);
            echo($categ);
            echo($categid);
            if(!isset($_GET["editar"])){
                $sql = "INSERT INTO entrades VALUES (null,'$userID','$categid','$titol','$desc',CURDATE());";
                if ($mysqli -> query($sql) === TRUE){
                    $_SESSION["entra"]="Entrada creat Correctament!";
                }else {
                    $_SESSION["entra"]="Error al crear l'entrada, intenta-ho de nou: \n";
                }
            }else{
                $entrada_id=$_GET["editar"];
                $sql = "UPDATE entrades SET categoria_id = '$categ', titol='$titol',descripcio'$desc' WHERE id=$entrada_id AND usuari_id=$userID";

                if ($mysqli -> query($sql) === TRUE){
                    $_SESSION["entraError"]="Entrada creat Correctament!";
                }else {
                    $_SESSION["entraError"]="Error al crear l'entrada, intenta-ho de nou: \n";
                }
                header("Location: entradaEditar.php");
            }
        }
    }
header("Location: CrearEntra.php");
?>