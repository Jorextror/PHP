<!-- Fes un formulari php amb 2 input de tipus select que permeti escollir 
el color de fons de la pàgina i el color del text. Aquest colors s’ha de guardar en dues cookies,  
de manera que quan tornem a carregar la pàgina recordi els colors. 
El color de fons per defecte és blanc, i el text negre. 
El programa no ha de permetre escollir el mateix color de fons que de text. -->
<?php
    include_once 'includes/header.php';
?>

<?php

    setcookie('cookie_name', "galeta_creada que caduca d'aquí 15s", time()+60*60*24);
    

?>

<form action="">
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
  <option value="while">while</option>
  <option value="yellow">yellow</option>
  <option value="green">green</option>
  <option value="red">red</option>
</select>
</form>


<?php
    include_once 'includes/footer.php';
?>