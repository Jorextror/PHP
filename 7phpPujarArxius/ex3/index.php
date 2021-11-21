<!-- Fes un aplicatiu  en php que en un formulari demani 
nom, cognom i data de naixament dels usuaris,  desa les dades en un arxiu dades.
csv (que ja contindrà 100 línies com a dades fake) en format csv.  -->
<!-- Fes un enllaç a mostrar_dades:
llegir les dades de l’arxiu i mostrar-les en una taula de màxim 20 files, fes paginació. (Link inici, anterior - següent, fi) (<<  <  >  >>)
Hi ha d’haver 2 botons que mostren les dades ordenades o bé per cognoms o bé per nom
hi ha d’haver un formulari amb 2 inputs format data, i mostrar només els usuaris amb data de naixament entre aquestes dues dates -->

<?php
session_start();
?>
<form  action="valida.php" enctype="multipart/form-data" method="post" >
    Nom: <input type="text" name="nom"><br>
    Cognom: <input type="text" name="cognom"><br>
    Data de naixament: <input type="date" name="data"><br>
    <input type="submit" value="Subir">
</form>