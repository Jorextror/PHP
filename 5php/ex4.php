<!-- Fes un formulari php amb 2 input de tipus select que permeti escollir 
el color de fons de la pàgina i el color del text. Aquest colors s’ha de guardar en dues cookies,  
de manera que quan tornem a carregar la pàgina recordi els colors. 
El color de fons per defecte és blanc, i el text negre. 
El programa no ha de permetre escollir el mateix color de fons que de text. -->
<?php
    include_once 'includes/header.php';
?>

<form action="" method="post">
<label for="letra">Choose a color letra:</label>
<select name="letra" id="letra">
  <option value="black">black</option>
  <option value="yellow">yellow</option>
  <option value="green">green</option>
  <option value="red">red</option>
</select>

<br>
<label for="fons">Choose a color fons:</label>
<select name="fons" id="fons">
  <option value="white">white</option>
  <option value="yellow">yellow</option>
  <option value="green">green</option>
  <option value="red">red</option>
</select>

</form>

<?php
    setcookie('cookie_letra', "letra", time()+10);
    setcookie('cookie_fons', "fons", time()+10);
?>

<?php
    include_once 'includes/footer.php';
?>