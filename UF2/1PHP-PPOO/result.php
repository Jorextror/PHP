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
        $id=$_SESSION["id"];
        $method=$_SESSION["method"];
        $action=$_SESSION["action"];
        $camps=$_SESSION["camps"];

    ?>
    <form action="" method="post">
        <?php 
        for ($i=0; $i < $camps; $i++) { 
            ?>
            <label for="id">Id del formulari</label>
            <input type="text" name="id" id="id"><br>

        <?php}?>
        
        <input id="crea" type="submit" name="submit" value="Crea">
        <input id="cancela" type="submit" name="submit" value="Cancel·la">
    </form>
</body>
</html>