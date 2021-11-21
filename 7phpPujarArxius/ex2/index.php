<!-- Fer un programa php que et permeti pujar un arxiu en format imatge i mostrar-lo  
(comprova que el format sigui una imatge) -->
<?php
session_start();
?>
<form  action="valida.php" enctype="multipart/form-data" method="post" >
    <input type="file" name="images"> 
    <input type="submit" value="Subir">
</form>
<?php
if (!isset($_SESSION["images"])) {
    $_SESSION["images"]="";
}
print_r($_SESSION["images"])
?>