<?php

use PhpParser\Node\Expr\Cast\Array_;
require_once "Chat.php";
require_once "Chienx.php";
require_once "Animal.php";

class Personne {

    // static
    // heritage
    
    // encapsulation
    private string  $nom;
    private string  $prenom;
    private Array  $animaux; 


    // private Array $listeChien;

    public function __construct (string $newNom, string $newPrenom) {
        $this->nom      = $newNom;
        $this->prenom   = $newPrenom;
        $this->animaux  = array();
    }

    public function addChien(Animal $animal) {
        array_push( $this->animaux, $animal);
    }

    // setter
    public function setNom(string $newNom) : void {
        $this->nom = $newNom;
    }
    public function setPrenom(string $newPrenom) {
        $this->nom = $newPrenom;
    }
   

    // getter
    public function getNom() : string {
        return $this->nom;
    }
    public function getPrenom() : string {
        return $this->prenom;
    }

  

    public function getAnimaux()
    {
        return $this->animaux;
    }

    public function setAnimaux($animaux)
    {
        $this->animaux = $animaux;

        return $this;
    }


    
    public function __toString() {
        $chaine = '[Personne: nom=>'    . $this->getNom() 
                      . ', prenom=>'    . $this->getPrenom()

                      . ', chiens=>[';  
        foreach($this->animaux as $animal) {
            $chaine .= $animal;
        }
        $chaine .= ']]';
        return $chaine;
    }

}