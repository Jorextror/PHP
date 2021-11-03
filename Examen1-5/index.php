<?php
session_start();
?>

<form action="sessio.php" method="POST">
 
   <p>
       <label for="usuari">Usuari</label>
       <input type="text" name="usuari"  />
   </p>
 
   <p>
       <label for="pw">Password</label>
       <input type="password" name="pw"/>
   </p>
   <p>
       <input type="submit" value="enviar"/>
   </p>
 
</form>

<?php
if (isset($_SESSION["missatge"])){
    print_r($_SESSION["missatge"]);
    echo $_SESSION["missatge"];
}
?>