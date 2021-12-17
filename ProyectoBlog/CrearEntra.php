<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoria</title>
</head>
<body>
    <h1>Crear entrada</h1>
    <p>Afegeix noves entrada al blog</p>

    <?php
        session_start();
        if (empty($_SESSION["entra"])){
            $_SESSION["entra"]="";
          }
        if (empty($_SESSION["titol"])){
            $_SESSION["titol"]="";
          }
        echo($_SESSION["entra"]);
    ?>
    <form action="validarEntra.php" method="post">
        <label for="Titol de la entrada">Titol de la entrada</label><br>
        <input type="text" name="titol" id="titol" require><br><br>
        <?php$_SESSION["titol"]?><br>
        <label for="Descripcio">Descripcio</label><br>
        <textarea id="desc" name="desc" rows="4" cols="50" require></textarea><br><br>
        <label for="Categories">Categories</label><br>
        <select id="categ" name="categ">
            <?php
                include "includes/mostraCategories.php";
                $categories=mostraCategories();
                 for ($i=0; $i < count($categories); $i++) {
                    echo "<option value='".$categories[$i]."'>".$categories[$i]."</option>";
                }?>
        </select><br><br>

        <input type="submit" value="Desar">
    </form>
</body>
</html>