<!-- Fes un programa amb php, que utilitzant una cookie tingui un comptador de visites 
durant les properes 24h. Per cada 5 visites apareixerà una estrella a sota el núm. de visites, 
amb un màxim de 3 estrelles.   -->

<?php
    include_once 'includes/header.php';
?>

<?php
    $visitas=1;
    if (isset($_COOKIE['cookie_name'])) {
        $visitas+=(int) $_COOKIE['cookie_name'];
        echo "Visites ",$visitas;
        echo '<br>';
        if ($visitas >= 5) {
            $estrella="*";
            if ($visitas >= 10){
                $estrella="**";
                if ($visitas >= 15){
                    $estrella="***";
                }
            }
            echo $estrella;
        }
    } else {
        echo"<h1>benvingut</h1>";
    }
    setcookie('cookie_name', $visitas, time()+60*60*24);
?>

<?php
    include_once 'includes/footer.php';
?>