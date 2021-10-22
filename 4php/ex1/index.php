<!-- Primer, la pàgina 2 ha de recollir la dada enviat pel formulari de la pàgina 1. 
És el procediment habitual: per POST; cal una  variable per recollir la dada; variable auxiliar que indica la correcció de la dada; 
comprovació i missatges d'error; si la dada és correcte, missatge final.

web1: pide text, va a web2,
web2: confirma text(letra o numero nomes),  
tornar web1: mostra ultim text-->
<?php
    session_start();
    $_SESSION["user"]="Jordi";
?>
<!DOCTYPE html>
<html>
<body>
<h1>Pagina 1</h1>
<form method="post" action="p1.php">
    Text: <input type="text" name="fname">
    <input type="submit">
</form>
</body>
</html>

<?php
    if (isset($_SESSION["user"])) {
        print($_SESSION["salida"]);
    }
    $_SESSION["salida"]="";
?>