<?php

use PhpParser\Node\Expr\Cast\Array_;

require_once "Chienx.php";

class Personne {

    // static
    // heritage
    
    // encapsulation
    private string  $nom;
    private string  $prenom;
    private Array   $chiens; 


    // private Array $listeChien;

    public function __construct (string $newNom, string $newPrenom) {
        $this->nom      = $newNom;
        $this->prenom   = $newPrenom;
        $this->chiens  = array();
    }

    public function addChien(Chienx $chien) {
        array_push( $this->chiens, $chien);
    }

    // setter
    public function setNom(string $newNom) : void {
        $this->nom = $newNom;
    }
    public function setPrenom(string $newPrenom) {
        $this->nom = $newPrenom;
    }
    public function setChien(Chienx $chien) {
        $this->chien = $chien;
    }

    // getter
    public function getNom() : string {
        return $this->nom;
    }
    public function getPrenom() : string {
        return $this->prenom;
    }

    public function getChien(): ? Chienx {
        return $this->chien;
    }


    
    public function __toString() {
        $chaine = '[Personne: nom=>'    . $this->getNom() 
                      . ', prenom=>'    . $this->getPrenom()

                      . ', chiens=>[';  
        foreach($this->chiens as $chien) {
            $chaine .= $chien;
        }
        $chaine .= ']]';
        return $chaine;
    }
}