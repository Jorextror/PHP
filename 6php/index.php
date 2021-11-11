<?php
session_start();
if (empty($_SESSION["missatge"])){
    $_SESSION["missatge"]=array("nom"=>"","passw"=>"","formacio"=>"","idiomas"=>"","mail"=>"","web"=>"");
}
?>
<!DOCTYPE html>
<html lang="ca" >
    <head>
        <meta charset="utf-8" />
        <title>Formulari </title>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <h1>Formulari:</h1>
        <p><span class="error">* required field</span></p>
            <form action="validacio.php" method="POST" enctype="multpart/form-data">
                <p> 
                Nom:<label for="nom"></label>
                    <input type="text" name="nom" autofocus 
                           placeholder="Introdueix el teu nom"/>
                           <span class="error">* <?php print_r($_SESSION["missatge"]["nom"]);?></span><br/>
                
                <p> 
                Password:<label for="passw"></label>
                    <input type="password" name="passw" />
                    <span class="error">* <?php print_r($_SESSION["missatge"]["passw"]);?></span><br/>
                </p>
                Formacio:<br/>
                <Select name="formacio">
                    <option>ESO</option>
                    <option>FP</option>
                    <option>BAT</option>
                </Select>
                <span class="error"><?php print_r($_SESSION["missatge"]["formacio"]);?></span><br/>
                <br/><br/><br/><br/>

                Idiomas:<input type="checkbox" name="idiomas" value="ca">Català
                <input type="checkbox" name="idiomas" value="es">Español
                <input type="checkbox" name="idiomas" value="en">Anglès
                <input type="checkbox" name="idiomas" value="fr">Francés
                <input type="checkbox" name="idiomas" value="al">Alemà
                <span class="error"><?php print_r($_SESSION["missatge"]["idiomas"]);?></span><br/>

                <p>
                    Email:<label for="mail"></label>
                    <input type="email" name="mail" value="Administrador" />
                    <span class="error">* <?php print_r($_SESSION["missatge"]["mail"]);?></span><br/>
                </p>

                <p> 
                Lloc Web:<label for="web"></label>
                    <input type="url" name="web" /><br/>
                    <span class="error"><?php print_r($_SESSION["missatge"]["web"]);?></span><br/>
                </p>
                <input type="submit" value="Enviar"/>
            </form>
        </p>
    </body>
</html>