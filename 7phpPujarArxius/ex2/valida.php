<?php
session_start();
$_SESSION["images"]="";
#un split de "." para las extenciones
$extencion = explode(".",$_FILES['images']['name'])[1];

if ( $extencion == "jpg"  || $extencion == "jpeg" || $extencion == "png"|| $extencion == "PNG" ) {
    if (!is_dir('images')) {
        mkdir('images',0777) ;
    }
    #La función basename devuelve el nombre del fichero de una ruta.
    $path = "images/". basename($_FILES['images']['name']);
    echo $path;
    #La función move_uploaded_file es la que copia el archivo a la carpeta indicada.
    if(move_uploaded_file($_FILES['images']['tmp_name'], $path)) {
        $_SESSION["images"]="<img src='images/".$_FILES['images']['name']."'>";
    } else{
        $_SESSION["images"]= "El archivo no se ha subido correctamente";
    }
}else{
    $_SESSION["images"]= "debe ser una imagen";
}
header("Location: index.php");
?>  