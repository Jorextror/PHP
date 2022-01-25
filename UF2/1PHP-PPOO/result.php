<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Forms {
    private $nom;
    private $id;
    private $tipus;
    private $valor;

    private $idForm;
    private $method;
    private $action;
    private $camps;

    public function __construct($nom, $id, $tipus, $valor, $idForm, $method, $action, $camps){
        $this->nom = $nom;
        $this->id = $id;
        $this->tipus = $tipus;
        $this->valor = $valor;

        $this->idForm = $idForm;
        $this->method =$method;
        $this->action = $action;
        $this->camps = $camps;
    }

    public function formulari($nom, $id, $tipus, $valor, $idForm, $method, $action, $camps){
        if (empty($nom) || empty($id) || empty($tipus) || empty($idForm) || empty($method) || empty($action) || empty($camps)){
            $_SESSION["ValidarInput"]="El unico campo que puede estar vacio es value!";
            // header("Location: forms.php");
        }else {
            $texto="<form id='$idForm' action='$action' method='$method'>";
            for ($i = 0; $i < $camps; $i++){
                if (empty($valor[$i])){
                    $valor[$i]=" ";
                }
                if ($tipus[$i]=="select") {
                    $texto.= "<select name='$nom[$i]' id='$id[$i]' value='$valor[$i]' >";
                    $texto.= "<option value='$valor[$i]'>$valor[$i]</option>";
                    $texto.= "</select>";
                }else if ($tipus[$i] == "textarea") {
                    $texto.= "<textarea name='$nom[$i]' id='$id[$i]' rows='4' cols='50' >$valor[$i]</textarea>";
                }else if ($tipus[$i] == "submit") {
                    $texto.= "<input name='$nom[$i]' id='$id[$i]' $valor[$i] type='$tipus[$i]'>";
                }else if ($tipus[$i] == "checkbox") {
                    $texto.= "<input name='$nom[$i]' id='$id[$i]' $valor[$i] type='$tipus[$i]'>";
                    $texto.= "<label for='nom'>$nom[$i]</label>";
                }else{
                    $texto.= "<label for='nom'>$nom[$i]:</label><br>";
                    $texto.= "<input name='$nom[$i]' id='$id[$i]' $valor[$i] type='$tipus[$i]'>";
                }
                $texto.= "<br><br>";
            }
            $texto.= "</form>";

            $arxivo = fopen("form.txt", 'w') or die("Se produjo un error al crear el archivo");
            fwrite($arxivo, $texto) or die("No se pudo escribir en el archivo");
            fclose($arxivo);
        }
    }
}
session_start();
unset($_SESSION['ValidarInput']);
$texto="";

$nom=$_POST["nom"];
$id=$_POST["id"];
$tipus=$_POST["tipus"];
$valor=$_POST["valor"];

$idForm=$_SESSION["idForm"];
$method=$_SESSION["method"];
$action=$_SESSION["action"];
$camps=$_SESSION["camps"];


$form = new Forms($nom, $id, $tipus, $valor, $idForm, $method, $action, $camps); // Creem un nou objecte
$form->formulari($nom, $id, $tipus, $valor, $idForm, $method, $action, $camps);

header("Location: index.php");
?>

</body>
</html>