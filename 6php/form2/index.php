<!DOCTYPE html>

<!-- http://localhost/mp7-php/21-formularis/


-->


<html lang="ca" >
    <head>
        <meta charset="utf-8" />
        <title>Formularis 21 </title>
    </head>
    <body>
        <h1>Formulari  PHP i HTML</h1>
        
        <?php 

            if (isset($_GET['error'])) {
            $error = $_GET['error'];
            
            if ($error == 'nom') {
                echo '<strong style="color:red">Nom incorrecte  </strong>';
            }
            if ($error == 'cognom') {
                echo '<strong style="color:red">Cognom incorrecte  </strong>';
            }
            if ($error == 'edat') {
                echo '<strong style="color:red">Edat incorrectea  </strong>';
            }
            if ($error == 'mail') {
                echo '<strong style="color:red">Mail incorrecte  </strong>';
            }
            if ($error == 'pass') {
                echo '<strong style="color:red">Password incorrecte  </strong>';
            }
        

        }
        ?>
        <!-- 
            * action a la pàgina que anirà la informació del Formulari
            * method POST GET
            * filtrem de la banda del client, però també del servidor


        -->
        
            <form action="processar.php" method="POST">
                Nom: &nbsp; &nbsp; &nbsp; &nbsp; 
                <p> 
                    <label for="nom"></label>
                    <input type="text" name="nom"  pattern="[A-Za-z]+"/>
                       
                </p>
                Cognom:
                <p> 
                    <label for="cognom" require="required" pattern="[A-Za-z]+"></label>
                    <input type="text" name="cognom"/>
                       
                </p>
                Edat:
                <p> 
                    <label for="edat" require="required" pattern="[0-9]+"></label>
                    <input type="number" name="edat"/>
                       
                </p>
                mail:
                <p> 
                    <label for="mail"></label>
                    <input type="email" name="mail" require="required"  />
                       
                </p>
                Password:
                <p> 
                    <label for="pass"></label>
                    <input type="password" name="pass" require="required"  />
                       
                </p>
                
                <p>
                    <input type="submit" value="enviar"/>
                </p>

            </form>
        </p>
    </body>
</html>