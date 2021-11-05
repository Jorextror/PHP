
<?php

        
        setcookie('nom',$_POST['nom'],time()+20);

        // les cookies han d'estar habilitades en el seu navegador
        // i normalment hauríem d'informar de l'ús de les cookies

        // chrome://settings/content/cookies


        // És la variable on hi ha les dades de la cookie $_COOKIE
        // codi patró per accedir a una cookie

        header("Location:cookies02.php");
        

        

        
                
    ?>



