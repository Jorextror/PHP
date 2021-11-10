<?php

//http://localhost/mp7-php/17-cookies/veure_cookies.php


// la variable supergloblar $_COOKIE 
// conté la informació referent a les cookies

if (isset($_COOKIE['unaCookie'])) {
    echo "<h1> ".$_COOKIE['unaCookie']."</h1>";

} else {
    echo "No existeix la cookie <br/><br/>";
}

if (isset($_COOKIE['unAny'])) {
    echo "<h1> ".$_COOKIE['unAny']."</h1>";

} else {
    echo "No existeix la cookie <br/><br/>";
}
// Ctrl+I Application Cookies

/*var_dump($_COOKIE);

//$lesCookies = $_COOKIE;
foreach($lesCookies as $cookie) {

    echo $cookie."<br/>";

}
*/

?>

<a href="delete_cookies.php">Esborrem galetes</a>
<a href="cookies.php">Creem galetes</a>


