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
$idForm=$_SESSION["id"];
$method=$_SESSION["method"];
$action=$_SESSION["action"];
$camps=$_SESSION["camps"];

// class Forms {
//     public $nom;
//     public $id;
//     public $tipus;
//     public $valor;
// 
//     public function __construct($nom, $id, $tipus, valor){
//         $this->nom = $nom;
//         $this->id = $id;
//         $this->tipus = $tipus;
//         $this->valor = $valor;
//     }
// }

// $user1 = new Forms();
// echo $user1->nom;
// echo $user1->text();
?>

<h1>Creador de formularis</h1>
<form action="result.php" method="post">
    <?php 
    for ($i=0; $i < $camps; $i++) {
        ?>
        <h3>Camp <?php echo $i+1 ?></h3>
        <label for="nom">Nom del input</label>
        <input type="text" name="nom" id="nom"><br>

        <label for="id">Id del input</label>
        <input type="text" name="id" id="id"><br>

        <label for="tipus">Tipus del input</label>
        <select name="tipus" id="tipus">
            <option value="text">Text</option>
            <option value="numeric">Numèric</option>
            <option value="textarea">Textarea</option>
            <option value="select">Select</option>
            <option value="checkbox">Checkbox</option>
            <option value="submit">Submit</option>
        </select><br>

        <label for="valor">Valor per defecte</label>
        <input type="text" name="valor" id="valor"><br>
    <?php
    }?>
    
    <input id="crea" type="submit" name="submit" value="Crea">
</form>
</body>
</html>