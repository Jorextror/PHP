<?php
require "modelBase.php";
class Usuari extends ModelBase{ // ---- 4 herencia -----
    private  $nom;
    private  $cognoms;
    private  $email;
    private $password;

    /*Get the value of nom*/ 
    public function getNom()
    {
        return $this->nom;
    }

    /*Set the value of nom
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /*Get the value of cognoms*/ 
    public function getCognoms()
    {
        return $this->cognoms;
    }

    /*Set the value of cognoms
     * @return  self
     */ 
    public function setCognoms($cognoms)
    {
        $this->cognoms = $cognoms;
        return $this;
    }

    /*Get the value of email*/ 
    public function getEmail()
    {
        return $this->email;
    }

    /*Set the value of email
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /*Get the value of password*/ 
    public function getPassword()
    {
        return $this->password;
    }

    /* Set the value of password
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function aconseguirTots() {
        return "Llistat de  tots els usuaris us1,us2,us3";
    }
}
?>