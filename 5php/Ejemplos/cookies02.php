
<!DOCTYPE html>
<!-- http://localhost/mp7-php/18-cookies/cookies02.php -->

<html lang="ca">
  <head>
    <meta charset="utf-8">
    <title>Page Title</title>
    <meta name="description" content="Roughly 155 characters">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    
    
  </head>
  <body>
    <h1>Formulari</h1>

    <form action="cookie02b.php" method="POST">
        Nom: <input type="text" name="nom" />
        <input type="submit" value="Enviar!"/>

        <?php
          if (isset($_COOKIE['nom'])) {
            echo "Ets  :".$_COOKIE['nom']."?";
            echo "sino fes logout <a href='cookies02c.php'>Logout</a>";
          } else {
            echo "registra el teu nom";
          }

        ?>



    </form>

  </body>
</html>
