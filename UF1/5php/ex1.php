<?php
    //Creem cookies
    setcookie('cookie_name', "galeta_creada que caduca d'aquí 15s", time()+15);

    header('Location:ex1C.php');
?>