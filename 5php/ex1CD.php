
<?php
//Borrar cookies
        if (isset($_COOKIE[$cookie_name])) {
            unset($_COOKIE[$cookie_name]); 
            echo "borrem cookie";
            
            setcookie($cookie_name,'',time()-100);   
    }

    header('Location:ex1C.php');
?>