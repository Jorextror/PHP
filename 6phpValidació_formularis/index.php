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
                    <input type="text" name="nom" autofocus/>
                    <span class="error">* <?php print_r($_SESSION["missatge"]["nom"]);?></span><br/>
                
                <p> 
                Password:<label for="passw"></label>
                    <input type="password" name="passw" />
                    <span class="error">* <?php print_r($_SESSION["missatge"]["passw"]);?></span><br/>
                </p>
                Formació:<br/>
                <Select name="formacio">
                    <option>ESO</option>
                    <option>FP</option>
                    <option>BAT</option>
                </Select>
                <span class="error"><?php print_r($_SESSION["missatge"]["formacio"]);?></span><br/>
                <br/><br/><br/><br/>

                Idiomes:<input type="radio" name="idiomas" value="ca">Català
                <input type="radio" name="idiomas" value=0>Español
                <input type="radio" name="idiomas" value=1>Anglès
                <input type="radio" name="idiomas" value=2>Francés
                <input type="radio" name="idiomas" value=3>Alemà
                <span class="error"><?php print_r($_SESSION["missatge"]["idiomas"]);?></span><br/>

                <p>
                    Email:<label for="mail"></label>
                    <input type="text" name="mail" value="Administrator" />
                    <span class="error">* <?php print_r($_SESSION["missatge"]["mail"]);?></span><br/>
                </p>

                <p> 
                Lloc Web:<label for="web"></label>
                    <input type="text" name="web" />
                    <span class="error"><?php print_r($_SESSION["missatge"]["web"]);?></span><br/>
                </p>
                <input type="submit" value="Enviar"/>
            </form>
        </p>
    </body>
</html>