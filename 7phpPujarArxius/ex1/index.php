<!-- Escriviu un script PHP per obtenir diferències entre dos dates (introduïdes en un formulari)  
en anys, mesos, dies, hores, minuts, segons. Verifiqueu que la primera data és més petita que la segona, 
sino mostra error. -->
<?php
session_start();
if (!isset($_SESSION["datesdiff"])) {
    $_SESSION["datesdiff"]="";
}    
?>  
<form action="valida.php" method="post">
   Data1: <input type="datetime-local" name="data1"><br>
   Data2: <input type="datetime-local" name="data2"><br>
<input type="submit" value="Enviar">
</form>
<?php
print_r($_SESSION["datesdiff"])
?>