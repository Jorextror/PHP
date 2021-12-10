<?php
include "conectar.php";
function mostraEntrada(){
    $servername = "localhost";
    $username = "admin";
    $pasw = "OEh8lNo#nRZB";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $pasw, $bd);
    $entra=[];
    #select de las categories
    $entrada=$mysqli -> query("SELECT usuari_id,categoria_id,titol,descripcio,data FROM entrades;");
    #va extraiendo cada categoria para insertarlas en lista
    for ($i=0; $i < $entrada -> num_rows; $i++){ 
        $entra[$i]=mysqli_fetch_row($entrada);
    }
    return $entra;
}
?>