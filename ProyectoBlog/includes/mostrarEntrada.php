<?php
include "conectar.php";
function mostraEntrada(){
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);
    $entra=[];
    #select de las entradas
    $entrada=$mysqli -> query("SELECT * FROM entrades;");
    #va extraiendo cada entrada para insertarlas en lista
    for ($i=0; $i < $entrada -> num_rows; $i++){ 
        $entra[$i]=mysqli_fetch_row($entrada);
    }
    return $entra;
}
?>