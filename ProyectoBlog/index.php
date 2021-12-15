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
    if (!isset($_SESSION["login"])) {
      $_SESSION["login"]=0;
    }
  ?>
  <!-- MENU -->
  <?php include 'includes/menu.php';?>

  <!-- BARRA LATERAL (INICIAR SESION / REGISTRAR) -->
  <div class="lateral">
    <?php include 'includes/iniciform.php';?>
  </div>

  <!-- CAJA PRINCIPAL -->
  <?php if ($_SESSION["login"] === 0) {?>
  <div class="box" ><h1>Welcome</h1></div>
  <?php }?>7
  <?php if ($_SESSION["login"] === 1) {  ?>
    <div class="CC" ><h1>Crear categoria</h1></div>
  <div class="box boxin" >
    <h1>Blog principal</h1>
    <?php if ($_SESSION["login"] === 1) {
      include "includes/mostrarEntrada.php";
      $entrada=mostraEntrada();
      $categ=mostraCategories();
      for ($i=count($entrada)-1; $i > -1; $i--) {
        echo("<h1>".$entrada[$i][3]."</h1>");
        echo("<br>");
        echo($categ[$entrada[$i][2]]." || ".$entrada[$i][5]);
        echo("<br>");
        echo($entrada[$i][4]);
        echo("<br>");
        echo("<br>");
      }
    }?>
  </div>
  <?php }?>

<!-- FOOTER -->
<?php include 'includes/footer.php';?>
</body>
</html>