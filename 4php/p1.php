<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<h1>Pagina 2</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

// header('Location: http://http://localhost/php/4php/index.php');
// exit;
?>

</body>
</html>