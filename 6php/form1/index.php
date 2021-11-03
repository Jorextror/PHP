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
        
            <form action="desar.php" method="POST">
                Títol: &nbsp; &nbsp; &nbsp; &nbsp; 
                <p> 
                    <label for="titol"></label>
                    <input type="text" name="titol"/>
                       
                </p>
                Descripció
                <p> 
                    <textarea name="descripcio">

                    </textarea>
                </p> 
                <p>
                    <input type="submit" value="enviar"/>
                </p>

            </form>
        </p>
    </body>
</html>