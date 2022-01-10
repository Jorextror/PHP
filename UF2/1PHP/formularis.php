<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador dde formularis</title>
</head>
<body>
    <?php
        if(isset($_POST["action"])){
            if($_POST["submit"]=="Cancel·la"){
                header("Location: index.html");
            }
            $id=$_POST["id"];
            $method=$_POST["method"];
            $action=$_POST["action"];
            $camps=$_POST["camps"];

            
        }

    ?>


</body>
</html>