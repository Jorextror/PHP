<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    include 'includes/header.php';
    include 'includes/menu.php';
?>
    <h1>Les meves dades</h1>
    <p>modificar les teves dades</p>

    <?php
        if (empty($_SESSION["modi"])){
            $_SESSION["modi"]="";
        }
        print_r($_SESSION["modi"]);
    ?>

    <form action="validarModificarDades.php" method="post">
        <label for="Nom">Nom</label><br>
        <input type="text" name="nom" id="nom" require><br><br>

        <label for="Cognom">Cognom</label><br>
        <input type="text" name="cognom" id="cognom" require><br><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" require><br><br>

        <input type="submit" value="Modificar">
    </form>

    <?php include 'includes/footer.php';?>
</body>
</html>