<?php
require "modelBase.php";
// ---- 1 ---- modul
class Nota extends ModelBase{ // ---- 4 herencia -----
    private  $nom;
    private  $titol;

    // ---- 2 ---- get i set
    /* Get the value of nom */ 
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

     /* Get the value of titol*/ 
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
}
?>