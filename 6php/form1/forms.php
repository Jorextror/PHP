<!DOCTYPE html>

<!-- https://www.w3schools.com/html/html_forms.asp -->


<html lang="ca" >
    <head>
        <meta charset="utf-8" />
        <title>Formularis </title>
    </head>
    <body>
        <h1>Formulari  PHP i HTML</h1>
        <!-- 
            * action a la pàgina que anirà la informació del Formulari
            * method POST GET
            * enctype https://www.w3schools.com/tags/att_form_enctype.asp
            * ... + etiquetes input
        -->
        
            <form action="desar.php" method="POST" enctype="multpart/form-data">
                Nom: &nbsp; &nbsp; &nbsp; &nbsp; 
                <p> 
                    <label for="nom"></label>
                    <input type="text" name="nom" autofocus 
                           minlength="2" maxlength="25" 
                           pattern="[A-Z]+" required="required"
                           placeholder="Introdueix el teu nom"/><br/>
                Password
                <p> 
                    <label for="passw"></label>
                    <input type="password" name="passw" required /><br/>
                </p>

                formacio:<Select name="formacio">
                    <option>ESO</option>
                    <option>FP</option>
                    <option>BAT</option>
                </Select>

                <br/>
                Email
                <p> 
                    <label for="mail"></label>
                    <input type="email" name="email" value="Administrador" /><br/>
                </p>

                Lloc Web:
                <p> 
                    <label for="web"></label>
                    <input type="url" name="web" /><br/>
                </p>
                <input type="submit" value="enviar"/>

            </form>
        </p>
    </body>
</html>