<?php
    include_once 'includes/header.php';
?>

<?php
    //Combrova cookies
    if (isset($_COOKIE['cookie_name'])) {
        echo "<h1> ".$_COOKIE['cookie_name']."</h1>";
    } else {
        echo "No existeix la cookie <br/><br/>";
    }
?>
<button onclick="window.location.href='ex1.php'" >Creem galetes</button>
<button onclick="window.location.href='ex1C.php'" >Combrovar galetes</button>
<button onclick="window.location.href='ex1CD.php'" >Esborrem galetes</button>

<?php
    include_once 'includes/footer.php';
?>