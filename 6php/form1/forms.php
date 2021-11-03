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
        
            <form action="" method="POST" enctype="multpart/form-data">
                Nom: &nbsp; &nbsp; &nbsp; &nbsp; 
                <p> 
                    <label for="nom"></label>
                    <input type="text" name="nom" autofocus 
                           minlength="2" maxlength="25" 
                           pattern="[A-Z]+" required="required"
                           placeholder="Introdueix el teu nom"/><br/>
                </p>
                Cognoms: 
                <p> 
                    <label for="cognoms"></label>
                    <input type="text" name="cognoms" value="text per defecte"/><br/>
                </p>
                Botó
                <p> 
                    <label for="bto"></label>
                    <input type="button" value="botó"/><br/>
                </p>
                Color
                <p> 
                    <label for="color"></label>
                    <input type="color" name="color" /><br/>
                </p>
                Data
                <p> 
                    <label for="data"></label>
                    <input type="date" name="data" /><br/>
                </p>
                Email
                <p> 
                    <label for="mail"></label>
                    <input type="email" name="email" /><br/>
                </p>
                
                File
                <p> 
                    <label for="arxiu"></label>
                    <input type="file" name="arxiu" multiple/><br/>
                </p>
                Email
                <p> 
                    <label for="numero"></label>
                    <input type="number" name="numero" /><br/>
                </p>
                Password
                <p> 
                    <label for="passw"></label>
                    <input type="password" name="passw" /><br/>
                </p>

                URL
                <p> 
                    <label for="web"></label>
                    <input type="url" name="web" /><br/>
                </p>
                Descripció
                <p> 
                    <Textarea>

                    </Textarea>
                </p> 


                <Select name="colors">
                    <option>yellow</option>
                    <option>blue</option>
                    <option>white</option>
                </Select>
                <br/>
                <input type="submit" value="enviar"/>

            </form>
        </p>
    </body>
</html>