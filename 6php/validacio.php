<?php
$missatge = "ok";

if  (!( empty($_POST['nom']) || empty($_POST['mail']) || empty($_POST['passw']))) {
        
        $nom = $_POST['nom'];
        $passw = $_POST['passw'];
        $mail = $_POST['mail'];

        if (!(preg_match ("/[A-Za-z ]+/",$nom))) {
            $missatge =$missatge+ "nom";
        }
        if (!preg_match("/^(?=.?[a-zA-Z])(?=.?[0-9])(?=.?[-+]).{8,}$/i",$passw)){
            $missatge =$missatge+ "pass";
        }

        if (!(empty($_POST['formacio']))) {
            $formacio = $_POST['formacio'];
        }

        if (!(isset($_POST['idiomas']) && $_POST['idiomas'] == '1')){
            $idiomas = $_POST['idiomas'];
            $missatge =$missatge+ "idiomas";
        }

        if (!(preg_match($mail, FILTER_VALIDATE_EMAIL))){
            $missatge =$missatge+ "mail";
        }
        if (!(empty($_POST['web']))){
            $web = $_POST['web'];
            if ((count(parse_url($web)))>2){
                $web = 'http://' + $web;
            }
        }
        
    } else {
        $missatge = 'falten_valors';
    }

    if ($missatge!= "ok") {
        header("Location:index.php?missatge=$missatge");
    }
?>