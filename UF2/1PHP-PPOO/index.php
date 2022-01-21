<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador dde formularis</title>
</head>
<body>
    <h1>Creador de formularis</h1>
    <form action="validaForm.php" method="post">
        <label for="id">Id del formulari</label>
        <input type="text" name="id" id="id"><br>
        <?php session_start();
        if (!empty($_SESSION["idV"])){
            echo $_SESSION["idV"];
            echo "<br>";
        }
        ?>

        <label for="method">Method</label>
        <select name="method" id="method">
            <option value="Get">Get</option>
            <option value="Post">Post</option>
        </select><br>

        <label for="action">Action del formulari</label>
        <input type="text" name="action" id="action" value=".php" ><br>
        <?php 
        if (!empty($_SESSION['actionV'])) {
            echo $_SESSION['actionV'];
            echo "<br>";
        }
        ?>

        <label for="camps">Nombre de camps</label>
        <input type="number" name="camps" id="camps"><br>
        <?php
        if (!empty($_SESSION["campsV"])){
            echo $_SESSION["campsV"];
            echo "<br>";
        }
        ?>

        <input id="crea" type="submit" name="submit" value="Crea">
        <input id="cancela" type="submit" name="submit" value="Cancel·la">
    </form>
</body>
</html>