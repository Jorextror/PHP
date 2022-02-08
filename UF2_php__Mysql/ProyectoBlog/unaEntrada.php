<?php
session_start();
include 'includes/header.php';
include 'includes/menu.php';

$id=$_GET["id"];
include 'includes/mostrarEntrada.php';
$entrada=mostraUnaEntrada($_GET["id"]);

echo("<h1>".$entrada[3]."</h1>");
echo("<br>");
echo(mostraCategoriesNom($entrada[2])." || ".$entrada[5]);
echo("<br>");
echo($entrada[4]);
echo("<br>");
echo("<br>");
if($entrada[1]==$_SESSION["id"]){
    echo("<a href='entradaEditar.php?id=".$entrada[2]."'>Editar</a>");
    echo("<a href='entradaEliminar.php?id=".$entrada[2]."'>Eliminar</a>");
}

?>

<?php 
include 'includes/footer.php';
?>