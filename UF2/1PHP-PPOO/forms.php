<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador dde formularis</title>
</head>
<body>
<?php
session_start();
$idForm=$_SESSION["idForm"];
$method=$_SESSION["method"];
$action=$_SESSION["action"];
$camps=$_SESSION["camps"];


if (!empty($_SESSION["ValidarInput"])){
    echo $_SESSION["ValidarInput"];
    echo "<br>";
}
?>

<h1>Creador de formularis</h1>
<form action="result.php" method="post">
    <?php 
    for ($i=0; $i < $camps; $i++) {
        ?>
        <h3>Camp <?php echo $i+1 ?></h3>
        <label for="nom">Nom del input</label>
        <?php echo"<input type='text' name='nom[$i]'><br>" ?>

        <label for="id">Id del input</label>
        <?php echo"<input type='text' name='id[$i]'><br>" ?>

        <label for="tipus">Tipus del input</label>
        <?php echo "<select name='tipus[$i]'>" ?>
            <option value="text">Text</option>
            <option value="number">Numèric</option>
            <option value="textarea">Textarea</option>
            <option value="select">Select</option>
            <option value="checkbox">Checkbox</option>
            <option value="submit">Submit</option>
        </select><br>

        <label for="valor">Valor per defecte</label>
        <?php echo"<input type='text' name='valor[$i]'><br>" ?>
    <?php
    }?>
    
    <input id="crea" type="submit" name="submit" value="Crea">
</form>

</body>
</html>