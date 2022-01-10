<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoria</title>
</head>
<body>
<?php
    session_start();
    include 'includes/header.php';
    include 'includes/menu.php';
?>

    <h1>Crear categories</h1>
    <p>Afegeix noves categories al blog</p>

    <?php
        if (empty($_SESSION["categ"])){
            $_SESSION["categ"]="";
          }
        echo($_SESSION["categ"]);
    ?>

    <form action="validarCateg.php" method="post">
        <label for="Nom de la categoria"></label>
        <input type="text" name="categ" id="categ"  require>
        <input type="submit" value="Desar">
    </form>

    <?php include 'includes/footer.php';?>
</body>
</html>