<?php
require_once 'Animal.php';
class Chienx extends Animal{

    private string $laisse;
    
    public function __construct (? string $newNom = 'calichien') {
        $this->nom = $newNom;
    }

  public function parler(){
        return 'waff waaaaafffffff';
    }

    public function __toString() {
        return '[Chien: nom=>'       . $this->getNom() . ']';
    }

  public function isChien(){
    return true;
  }

}