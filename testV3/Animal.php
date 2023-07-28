<?php
abstract class Animal {
    // encapsulation
    protected ? string $nom;


    public function setNom(string $newNom) {
        $this->nom = $newNom;
    }

    // getter
    public function getNom() {
        return $this->nom;
    }

    abstract public function parler();

    public function isChien(){
        return false;
    }
}