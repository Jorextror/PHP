<?php
// ---- 3 ---- 
// ---- 13 ----
require_once 'config/basedatos.php'; 
class ModelBase{

    public $db;
    public function _construct(){
        $this->db= database::connectar();
    }
    public function aconseguirTots($taula){
        $query = $this->db->query("SELECT * FROM $taula ORDER BY id DESC");
        return $query;
    }
}
?>