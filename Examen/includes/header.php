<?php
    $visitas=1;
    if (isset($_COOKIE['cookie_name'])) {
        $visitas+=$_COOKIE['cookie_name'];
        echo "Visites a la web: ",$visitas;
    }else {
        echo"<p>Benvingut a la web</p>";
    }
    setcookie('cookie_name', $visitas, time()+60*60*24*5);
?>

<h1>Index Exercicis</h1>
<hr/>
<ul>
    <li><a href="ex1.php">ex1</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
