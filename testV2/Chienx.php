<?php
class Chienx {
    
    // encapsulation
    private ? string $nom;

    public function __construct (? string $newNom = 'calinou') {
        $this->nom = $newNom;
    }

    // setter
    public function setNom(string $newNom) {
        $this->nom = $newNom;
    }

    // getter
    public function getNom() {
        return $this->nom;
    }

    public function __toString() {
        return '[Chienx: nom=>'       . $this->getNom() . ']';
    }

}