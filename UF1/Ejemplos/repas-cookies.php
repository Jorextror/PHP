<!DOCTYPE html>

<!-- http://localhost/mp7-php/23-cookies-mes-repas/ 
chrome://settings/-->

<?php
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("color", $color, time() + 20);
} else {
    if (isset($_COOKIE['color'])) {
        $color = $_COOKIE['color'];
    } else {
        $color = 'DarkSeaGreen';
    }
}
?>



<html lang="ca">

<head>
    <meta charset="utf-8" />
    <title>Formularis 21 </title>
</head>

<body <?php echo "style='background-color:$color'"; ?>>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="color">Escull un color de fons</label>
        <select name="color">
            <option value="BurlyWood">BurlyWood </option>
            <option value="Coral">Coral</option>
            <option value="Crimson">Crimson</option>
            <option value="DarkGoldenRod">DarkGoldenRod</option>
            <option value="silver">Gris</option>
            <option value="LightPink">Rosa</option>
        </select>
        <input type="submit" value="Cambiar Color!" />
    </form>
</body>

</html>

<!-- 
<?
/*

cookies que són arrays

$persona = array ("Pedro", "Pérez", "26", "Madrid", "abcde");
setcookie("micookie[nombre]", $persona[0], time()+3600);
setcookie("micookie[apellido]", $persona[1], time()+3600);
setcookie("micookie[edad]", $persona[2], time()+3600);
setcookie("micookie[ciudad]", $persona[3], time()+3600);
setcookie("micookie[password]", $persona[4], time()+3600);

echo "<br/>El nombre es: ".$_COOKIE['micookie']['nombre'];
echo "<br/>El apellido es: ".$_COOKIE['micookie']['apellido'];
echo "<br/>El edad es: ".$_COOKIE['micookie']['edad'];
echo "<br/>El ciudad es: ".$_COOKIE['micookie']['ciudad'];
echo "<br/>El password es: ".$_COOKIE['micookie']['password'];
*/
?>
-->