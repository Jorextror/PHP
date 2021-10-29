<?php

// chrome://settings/

// eliminar cookies de manera manual (Fer logout)

//

setcookie('nom','',time()-10);

header('Location:cookies02.php');
?>


