<?php

// com esborrem les cookies

if (isset($_COOKIE['unaCookie'])) {
    unset($_COOKIE['unaCookie']);    
    //a més cal caducar-la
    setcookie('unaCookie','',time()-100);

}
if (isset($_COOKIE['unAny'])) {
    unset($_COOKIE['unAny']); 
    echo "borrem cookie d'un any";
    
    setcookie('unaCookie','',time()-100);   
}

//una manera de navegar a una altra pàgina

header('Location:veure_cookies.php');



?>