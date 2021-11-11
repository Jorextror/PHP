<!DOCTYPE html>
<html lang="ca" >
    <head>
        <meta charset="utf-8" />
        <title>Formulari </title>
    </head>
    <body>
        <h1>Formulari:</h1>
        
            <form action="validacio.php" method="POST" enctype="multpart/form-data">
                <p> 
                Nom:<label for="nom"></label>
                    <input type="text" name="nom" autofocus 
                           minlength="2" maxlength="25" 
                           pattern="[a-zA-Z]+" required="required"
                           placeholder="Introdueix el teu nom"/><br/>
                
                <p> 
                Password:<label for="passw"></label>
                    <input type="password" name="passw" required /><br/>
                </p>
                Formacio:<br/>
                <Select name="formacio">
                    <option>ESO</option>
                    <option>FP</option>
                    <option>BAT</option>
                </Select>
                <br/><br/><br/><br/>

                Idiomas:<input type="checkbox" name="idiomas" value="ca">Català
                <input type="checkbox" name="idiomas" value="es">Español
                <input type="checkbox" name="idiomas" value="en">Anglès
                <input type="checkbox" name="idiomas" value="fr">Francés
                <input type="checkbox" name="idiomas" value="al">Alemà

                <p>
                    Email:<label for="mail"></label>
                    <input type="email" name="email" value="Administrador" /><br/>
                </p>

                <p> 
                Lloc Web:<label for="web"></label>
                    <input type="url" name="web" /><br/>
                </p>
                <input type="submit" value="Enviar"/>
                <span class="missatge"><?php echo $missatge;?></span>

            </form>
        </p>
    </body>
</html>