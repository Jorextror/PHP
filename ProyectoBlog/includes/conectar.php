<?php
$servername = "localhost";
$username = "admin";
$password = "OEh8lNo#nRZB";

$conec = new mysqli ($servername, $username, $password);
if ($conec->connect_error) {
    die("Connection failed: " . $conec->connect_error);
  }
?>