<!DOCTYPE html>
<html>
<body>

<?php
// Start the session
session_start();
if (!$_SESSION("usuario")) {

?>

<form>
<input type="text" id="fname" name="fname"><br>
<input type="submit" value="Submit">
</form>

<?php

} else {
    // Set session variables

        $_SESSION["usuario"] = "jordi";
        echo "Session iniciada y establecido nombre de usuario.";
    ?>
    <a href="p1.php">1p.php</a>
}

</body>
</html>