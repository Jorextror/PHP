<?php
session_start();
function mostrar($num,$op=false,$orde=false){
    if (!isset($_SESSION["cursor"])) {
        $_SESSION["cursor"]=0;
    }
    $row=$_SESSION["cursor"];
    if ($op == "+"){
        $row=$row+$num;
    }elseif ($op == "-"){
        $row=$row-$num;
    }
    $_SESSION["cursor"]=$row;
    #bastante increible lo de arriba pero no se como mover el cursor a esa linea y no encuentro nada
    #he pensado en convertirlo en array y con eso empezar en una posicion el bucle hasta 20 pero no caigo en como aplicarlo
    $file = fopen("dades.csv","r");
        while(!feof($file)){
            if ($row<=19){
                $row++;
                echo $row;
                // print_r(fgetcsv($file));
                echo fgets($file);
                echo "<br>";
            }else{
                break;
            }
        }
    fclose($file);
}
mostrar(0);
$num=$_SESSION["cursor"];
// $_SESSION["dades"]=$dades
// header("Location: index.php");
?>
<button onclick="mostrar(0)" type="button"> << </button>
<button onclick="mostrar(20,-)" type="button"> < </button>
<button onclick="mostrar(20,+)" type="button"> > </button>
<button onclick="mostrar(0,-)" type="button">  >> </button>
<br>
<button onclick="mostrar($num, ,'nom')" type="button">sort nom</button>
<button onclick="mostrar($num, ,'cognom')" type="button">sort cognom</button>
<br>
<form action="" method="post"> 
    Data 1: <input type="date" name="entre1"><br>
    Data 2: <input type="date" name="entre2"><br>
    <input type="submit" value="Entre dates">
</form>