<?php
var_dump($_POST);
$error = "ok";

// tornem a filtrar un cop aconseguides les dades

if  (!( empty($_POST['nom']) ||  empty($_POST['cognom']) ||
     empty($_POST['edat']) || empty($_POST['mail']) || empty($_POST['pass']) )) {
        
        $nom = $_POST['nom'];
        $cognom = $_POST['cognom'];
        $edat = (int) $_POST['edat'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        if (!(preg_match ("/[A-Za-z ]+/",$nom))) {
            $error = "nom";
        }
        if (!(preg_match ("/[A-Za-z ]+/",$cognom))) {
            $error = "conom";
        }
        if (!(filter_var($edat, FILTER_VALIDATE_INT))){
            $error = "edat";
        }
        if (!(filter_var($mail, FILTER_VALIDATE_EMAIL))){
            $error = "mail";
        }
        if (strlen($pass)<5){
            $error = "pass";
        }    
        
    
    } else {
        $error = 'falten_valors';
    }
    //var_dump($error);
    //die();
    if ($error!= "ok") {


        header("Location:index.php?error=$error");

    }
        

    




?>

<!DOCTYPE html>

<!-- https://www.w3schools.com/html/html_forms.asp -->


<html lang="ca" >
    <head>
        <meta charset="utf-8" />
        <title>Formularis 21 </title>
    </head>

    <body>
        <h2> Dades filtrades del formulari: </h2>
        <p> Nom: <?= $nom ?> </p>
        <p> Cognoms: <?= $cognom ?> </p>
        <p> Edat: <?= $edat ?> </p>
        <p> email: <?= $mail ?> </p>
        

    </body>
</html>

