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

  <?php if ($_SESSION["login"] === 0) {?>
  <!-- CAJA PRINCIPAL -->
  <div class="box" >
    <h1>Welcome</h1>
  </div>
  <?php }else{?>
    <div class="boxin" >
      <h1>Blog principal</h1>
    </div>
  <?php }?>

<!-- FOOTER -->
<?php include 'includes/footer.php';?>

</body>
</html>