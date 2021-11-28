<?php
session_start();
if(isset($_POST["nom"]) &&  isset($_POST["cognom"]) &&  isset($_POST["data"])){
    $nom=$_POST["nom"];
    $cognom=$_POST["cognom"];
    $data_naixement=$_POST["data"];
    
    $file = fopen("dades.csv","a+");
    rewind($file);
    fwrite($file, "\n".$nom."," );
    fwrite($file, $cognom.",");
    fwrite($file, $data_naixement);
    fflush($file);

    $_SESSION["dades"]=fgetc($file);
    fclose($file);
}else{
    $_SESSION["dades"]="No tiene los campos suficientes para guardarlo";
}
header("Location: index.php");
?>