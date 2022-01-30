<?php
// ---- 12 -----
class database{
    public static function connectar(){
        $servername = "localhost";
        $username = "admin";
        $password = "OEh8lNo#nRZB";
        $db= "notes_m7";

        $conec = new mysqli ($servername, $username, $password, $db);
        $conec->query("SET NAMES'utf8'");
        if ($conec->connect_error) {
            die("Connection failed: " . $conec->connect_error);
            return FALSE;
        }
        return $conec;
    }
}
?>