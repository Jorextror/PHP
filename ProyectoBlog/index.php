<!-- HEADER -->
<?php
    session_start();
    include_once 'includes/header.php';
    
    if (empty($_SESSION["missatge"])){
      $_SESSION["missatge"]="";
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <!-- MENU -->
  <nav class="navMenu">
    <a href="#">Home</a>
    <a href="#">Blog</a>
    <a href="#">Work</a>
    <a href="#">About</a>
    <img src="https://images.vexels.com/media/users/3/143157/isolated/preview/07f636024d3d7f8a4fdf63e41e09142d-icono-de-pate-de-jamon.png" width="30" >
    <div class="dot"><img src="https://images.vexels.com/media/users/3/143156/isolated/preview/c01a3e6372873d16d588ab65d124b2ac-icono-de-color-de-pierna-de-jamon.png" width="30" ></div>
  </nav>

  <!-- BARRA LATERAL -->
  <!-- form Iniciar Sesion -->
  <div class="lateral">
  <div class="form" style="height: 420px;" >
    <div class="title">Iniciar Sesion</div>
    <div class="subtitle"></div>
      <!-- Campos -->
    <form action="valida.php" method="POST">
      <div class="input-container ic1">
        <input id="email" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</>
      </div>
      <div class="input-container ic2">
        <input id="pasw" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="pasw" class="placeholder">Contrasenya</label>
      </div>
      <!-- submit -->
      <button type="text" class="submit">Iniciar Sesion</button>
    </form>

  </div>

  <!-- Form Registrar -->
  <div class="form form2" style="height: 580px;">
    <div class="title">Registrar</div>
    <div class="subtitle">Creem el teu compte!</div>
      <!-- Campos -->
    <form action="Registrar.php" method="POST">

      <div class="input-container ic1">
        <input name="nom" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="nom" class="placeholder">Nom</label>
      </div>

      <div class="input-container ic2">
        <input name="cognom" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="cognom" class="placeholder">Cognom</label>
      </div>

      <div class="input-container ic2">
        <input name="email" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</>
      </div>
      <div class="input-container ic2">
        <input name="pasw" class="input" type="password" placeholder=" " />
        <div class="cut"></div>
        <label for="pasw" class="placeholder">Contrasenya</label>
      </div>
      <!-- submit -->
      <button type="text" class="submit">Registrar</button>
    </form>
    <div class="error">
      <?php  print_r($_SESSION["missatge"])?>
    </div>
  </div>
  </div>
  <!-- CAJA PRINCIPAL -->
  <div class="box" >
    <h1>Blog principal</h1>
  </div>

</body>
</html>
<!-- FOOTER -->
<?php
    include_once 'includes/footer.php';
?>