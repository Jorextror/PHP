<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <!-- HEADER -->
  <?php
    session_start();
    include 'includes/header.php';
    
    if (empty($_SESSION["missatge"])){
      $_SESSION["missatge"]="";
    }
    if (empty($_SESSION["registrar"])){
      $_SESSION["registrar"]="";
    }
    if (empty($_SESSION["filtre"])){
        $_SESSION["filtre"]=0;
    }
    if (!isset($_SESSION["login"])) {
      $_SESSION["login"]=0;
    }
  ?>
  <!-- MENU -->
  <?php include 'includes/menu.php';?>

  <!-- BARRA LATERAL (INICIAR SESION / REGISTRAR) -->
  <div class="lateral">
    <?php include 'includes/iniciform.php';
    if ($_SESSION["login"] === 1) {
      include 'includes/cerca.php';
    }
    ?>

  </div>

  <!-- CAJA PRINCIPAL -->
  <?php if ($_SESSION["login"] === 0) {?>
  <div class="box" ><h1>Welcome</h1></div>
  <?php }?>
  <?php if ($_SESSION["login"] === 1) {  ?>
    <div class="CC" ><h3> <a href="CrearCateg.php">Crear Categoria</a> </h3></div>
    <div class="CE" ><h3> <a href="CrearEntra.php">Crear Entrada</a> </h3></div>
    <div class="MU" ><h3><a href="modificarDades.php">Modificar Dades</a></h3></div>
  <div class="box boxin" >
    <h1>Blog principal</h1>
    <!-- Posts -->
    <?php if ($_SESSION["login"] === 1) {
      include "includes/mostrarEntrada.php";
      
      if (empty($_SESSION["cerca"]) || $_SESSION["cerca"]=="" ){
        $entrada=mostraEntrada();
      }else{
        $entrada=$_SESSION["cerca"];
      }
      // print_r($entrada);
      
      $id=$_SESSION["filtre"];

      for ($i=count($entrada)-1; $i > -1; $i--) {
        $_SESSION["cerca"]="";//un set estaria mejor pero no quiero tocar nada mas
        if ($_SESSION["filtre"]==0){
          echo("<h1>".$entrada[$i][3]."</h1>");
          echo("<br>");
          echo(mostraCategoriesNom($entrada[$i][2])." || ".$entrada[$i][5]);
          echo("<br>");
          echo($entrada[$i][4]);
          echo("<br>");
          echo("<br>");
          echo("<a href='unaEntrada.php?id=".$entrada[$i][0]."'>leer mas</a>");
      
        }elseif($entrada[$i][2]==$_SESSION["filtre"]) {
          echo("<h1>".$entrada[$i][3]."</h1>");
          echo("<br>");
          echo(mostraCategoriesNom($entrada[$i][2])." || ".$entrada[$i][5]);
          echo("<br>");
          echo($entrada[$i][4]);
          echo("<br>");
          echo("<br>");
          echo("<a href='unaEntrada.php?id=".$entrada[$i][0]."'>leer mas</a>");
        }
      }
    }
    ?>

  </div>
  <?php }?>

<!-- FOOTER -->
<?php include 'includes/footer.php';?>
</body>
</html>