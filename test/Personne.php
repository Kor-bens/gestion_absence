<?php 
require_once "Chien.php";
class Personne {
   
    private string $nom;
    private string $prenom;
    private ? Chien $chien;
    

    public function __construct (string $newNom, string $newPrenom, ? Chien $newChien){
          $this->nom    = $newNom;
          $this->prenom = $newPrenom;
          $this->chien  = $newChien;

    } 

    //setter 
    public function setNom(string $newNom){
        $this->nom = $newNom;
    }

    public function setPrenom(string $newPrenom){
        $this->prenom = $newPrenom;
    }

    public function setChien(Chien $chien){
        $this->chien = $chien;
       
    }
    //getter
    public function getNom() : string{
        return $this->nom;
    }

    public function getPrenom() : string{
        return $this->prenom;
    }

    public function getChien() : Chien{
      return $this->chien;
    }

    public function __toString(){
        return '[Personne: nom =>' .$this->getNom() . ', prenom=>' .$this->getPrenom() . ', chien=>' .$this->chien .' ]';
    }

}