<?php
session_start();
$timeout = 60;
if (isset($_SESSION["timeout"])) {
    $limit= time() - $_SESSION["timeout"];
    if ($limit > $timeout) {
        header("Location: ex3.php");
    }
}
$_SESSION["timeout"]=time();

if (!isset($_SESSION["user"])) {
    $_SESSION["user"]="Jordi";
    $_SESSION["salida"]="";
}

if (isset($_SESSION["user"]) && $_SESSION["salida"]=="loguejat correctament") {
    print_r($_SESSION["salida"]);
    ?>
        <h1>Benvingut</h1>
        <button> <a href="ex3.php">Log out</a> </button>
    <?php
}else {
    ?>
    <form action="ex2.php" method="post" >
        Email:<input type="email" name="email"><br>
        Password:<input type="password" name="password">
    <input type="submit" value="Enviar">
    </form>
<?php
    print_r($_SESSION["salida"]);
}
?>