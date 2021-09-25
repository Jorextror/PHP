<?php

$num=$_GET["num"];

if ($num < 1000 ) {
    if ($num%2 == 0) {
        echo "es numero primero";
    }else {
        echo "No es numero primero";
    }
}else {
    echo "Menor de mil debe ser";
}
?>