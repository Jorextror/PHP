<?php
session_start();
if(isset($_POST["data1"]) &&  isset($_POST["data2"])){
    $date1 = new DateTime($_POST["data1"]);
    $date2 = new DateTime($_POST["data2"]);
    if ($date1>$date2) {
        #diff calcular la diferencia entre dos fechas
        $diff = $date1->diff($date2);
        $_SESSION["datesdiff"]=$diff->format("%d/%m/%Y %h:%i:%s");
    }else {
        $_SESSION["datesdiff"]="la segona data tiene que ser mas grande que la primera";
    }
}
header("Location: index.php");
?>