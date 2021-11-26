<!-- HEADER -->
<?php
    session_start();
?>
<!-- HTML -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- menu -->
    <nav class="navMenu">
      <a href="#">Home</a>
      <a href="#">Blog</a>
      <a href="#">Work</a>
      <a href="#">About</a>
      <img src="https://image.shutterstock.com/image-vector/ham-leg-icon-260nw-1013584873.jpg" width="30" >
      <div class="dot"><img src="https://image.shutterstock.com/image-vector/ham-leg-icon-260nw-1013584873.jpg" width="30" ></div>
    </nav>

<div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Let's create your account!</div>
        <!-- Campos -->
      <div class="input-container ic1">
        <input id="nom" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="nom" class="placeholder">Nom</label>
      </div>

      <div class="input-container ic2">
        <input id="cognom" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="cognom" class="placeholder">Cognom</label>
      </div>

      <div class="input-container ic2">
        <input id="email" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</>
      </div>
      <!-- submit -->
      <button type="text" class="submit">Registrar</button>
    </div>

</body>
</html>
<!-- FOOTER -->
<?php
if (isset($_SESSION["missatge"])){
    print_r($_SESSION["missatge"]);
    echo $_SESSION["missatge"];
}

    include_once 'includes/footer.php';
?>