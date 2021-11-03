<?php

if (isset($_GET['titol']) && isset($_GET['descripcio'])) {
    echo "<h2>".$_GET['titol']."</h2>";
    echo "<h2>".$_GET['descripcio']."</h2>";
}

if (isset($_POST['titol']) && isset($_POST['descripcio'])) {
    echo "<h2>".$_POST['titol']."</h2>";
    echo "<h2>".$_POST['descripcio']."</h2>";
}
?>
