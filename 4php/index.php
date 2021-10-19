<!-- Primer, la pàgina 2 ha de recollir la dada enviat pel formulari de la pàgina 1. 
És el procediment habitual: per POST; cal una  variable per recollir la dada; variable auxiliar que indica la correcció de la dada; 
comprovació i missatges d'error; si la dada és correcte, missatge final.

web1: pide text, va a web2,
web2: confirma text(letra o numero nomes),  
tornar web1: mostra ultim text-->

<?php
session_start();
// if (!$_SESSION("usuario")) {
?>

<!DOCTYPE html>
<html>
<body>

<h1>Pagina 1</h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Text: <input type="text" name="fname">
    <input type="submit">
</form>



<?php
// } else {

    if (condition) {
        # code...
    }
        $_SESSION["usuario"] = "jordi";

        header('Location: http://localhost/php/4php/p1.php');
        exit;
?>
    <a href="p1.php">1p.php</a>

</body>
</html>