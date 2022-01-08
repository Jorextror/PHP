<link rel="stylesheet" href="css/styles.css">
<nav class="navMenu">
    <a href="restar.php">Home</a>
    <!-- mostra les categories en el menu cuando se logean -->
    <?php if ($_SESSION["login"] === 1) {
      include "mostraCategories.php";
      include "definirCategoria.php";
      $categories=mostraCategories();
      for ($i=0; $i < count($categories); $i++) {
          $categid=GetCategoriaId($categories[$i]);
          echo "<a href='filtrarCategories.php?id=".$categid[$i]."'>".$categories[$i]."</a>";
          // echo "<a href='#'> <form action='filtrarCategories.php'><input type='hidden' name='id' value=".$categid[$i].">".$categories[$i]."</form></a>";
      }
    }?>
    <a href="about.php">About</a>
    <a href="#">Contacte</a>
    <img src="https://images.vexels.com/media/users/3/143157/isolated/preview/07f636024d3d7f8a4fdf63e41e09142d-icono-de-pate-de-jamon.png" width="30" >
    <!-- Mostra el logout en el menu -->
    <?php if ($_SESSION["login"] === 1) {?>
      <a class="logout" href="logout.php">Logout</a>
    <?php }?>
    <!-- el punto debajo del menu -->
    <div class="dot"><img src="https://images.vexels.com/media/users/3/143156/isolated/preview/c01a3e6372873d16d588ab65d124b2ac-icono-de-color-de-pierna-de-jamon.png" width="30" ></div>
  </nav>