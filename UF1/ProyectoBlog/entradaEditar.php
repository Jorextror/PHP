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
    $entrada_id=$_GET["id"];
    include 'includes/mostrarEntrada.php';

    $entrada=mostraUnaEntrada($_GET["id"]);
?>
    <h1>Editar categories</h1>
    <p>Editar categories al blog</p>

    <?php
        if (empty($_SESSION["entraError"])){
            $_SESSION["entraError"]="";
          }
        echo($_SESSION["entraError"]);

    ?>
    <form action="validarEntra.php?editar=<?=$entrada_id?>" method="post">
        <label for="Titol de la entrada">Titol de la entrada</label><br>
        <input type="text" name="titol" id="titol" value="<?=$entrada[3]?>" require><br><br>
        <?php$_SESSION["titol"]?><br>
        <label for="Descripcio">Descripcio</label><br>
        <textarea id="desc" name="desc" rows="4" cols="50" require> <?php echo $entrada[4]?> </textarea><br><br>

        <label for="Categories">Categories</label><br>
        <select id="categ" name="categ">
            <?php
                include "includes/mostraCategories.php";
                $categories=mostraCategories();
                for ($i=0; $i < count($categories); $i++) {
                    echo "<option value='".$categories[$i]."'> ".$categories[$i]." </option>";
                }
            ?>
        </select><br><br>

        <input type="submit" value="Actualitzar">
    </form>

    <?php include 'includes/footer.php';?>
</body>
</html>