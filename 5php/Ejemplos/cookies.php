<?php 

// http://localhost/mp7-php/17-cookies/cookies.php

/*
Què són les cookies??

Un arxiu que es desa en el dispositiu del client que visita la web, 
amb l'objectiu de desar dades que poden ser útils altres
vegades que el client visita la web. (p ex info d elogin)

https://ca.wikipedia.org/wiki/Galeta_(inform%C3%A0tica)

Els usos més freqüents són:

Guardar el nom d'usuari i contrasenya per evitar tornar-ho a introduir.
Mantenir un seguiment de les compres en una botiga virtual.
Utilitzar opcions de continguts o disseny escollides anteriorment.
Obtenir informació sobre els hàbits de navegació de l'usuari.
Obtenir informació de l'ordinador del visitant, com l'adreça IP, sistema operatiu o tipus de navegador.

Es desen de la banda de l'usuari.
Les galetes són fragments d'informació intercanviats entre el lloc
web i el navegador. És mitjançant aquesta comunicació que el lloc web 
(HTTP) pot tenir memòria d'estat i recordar altres interaccions 
amb l'usuari, que d'una altra forma serien considerats com a fets aïllats.

*/

// Iniciar la sessió

// setcookie($name, $value = "", $expire = 0, $path = "", $domain = "", $secure = false, $httponly = false)

// moneda = euro
// usuari = Anna
// expires=data la cookie ha caducat
// path=/ directoris on s'utulitzarà , per defecte la carpeta i subcarpeta
// domain= a quin domini està disponible
// una cookie bàsica


setcookie("unaCookie","un valor de la cookie->galetes maria dorada");

//cookie amb caducitat (dura un any)
//setcookie("unAny","valor de la cookie que caduca d'aquí un any", time()+(60*60*24*365));
setcookie("unAny","valor de la cookie que caduca d'aquí 10s", time()+10);

header('Location:veure_cookies.php');
?>





