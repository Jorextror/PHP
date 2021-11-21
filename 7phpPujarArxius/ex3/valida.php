<?php
session_start();
if(isset($_POST["nom"]) &&  isset($_POST["cognom"]) &&  isset($_POST["data"])){
    $nom=$_POST["nom"];
    $cognom=$_POST["cognom"];
    $data_naixement=$_POST["data"];
    
    $file = fopen("contacts.csv","a+");
    rewind($file);
    fwrite($file, $nom);
    fwrite($file, $cognom);
    fwrite($file, $data_naixement);
    fflush($file);

    echo fgetc($file);
    fclose($file);
// }else{

}

// header("Location: index.php");
?>