<?php
require "modelBase.php";
// ---- 1 ---- modul
class Nota extends ModelBase{ // ---- 4 herencia -----
    private  $nom;
    private  $titol;
    private  $descripcio;
    private $id;

    // ---- 2 ---- get i set
    /**
     * Get the value of nom 
     */ 
    public function getNom()
    {
        return $this->nom;
    }
    /* Set the value of nom
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }


     /* 
     *Get the value of titol
     */ 
    public function getTitol()
    {
        return $this->titol;
    }
    /* Set the value of titol
     * @return  self
     */ 
    public function setTitol($titol)
    {
        $this->titol = $titol;
        return $this;
    }


    /**
     * Get the value of descripcio  
     */ 
    public function getDescripcio ()
    {
        return $this->descripcio ;
    }
    /* Set the value of descripcio 
     * @return  self
     */ 
    public function setDescripcio ($descripcio )
    {
        $this->descripcio  = $descripcio ;
        return $this;
    }
// ---- 16 -----
    public function desa (){
        $sql = "INSERT INTO notes(usuari_id, titol, descripcio, data)VALUES ({$this->usuari_id}, '{$this->titol}', '{$this->descripcio}', CURRENT_DATE());";
        $desat = $this->db->query($sql);
        return $desat;
    }
}
?>