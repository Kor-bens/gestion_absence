<?php 
require_once 'Animal.php';

class Chat extends Animal {

    public function __construct (? string $newNom = 'calichat') {
        $this->nom = $newNom;
    }

    public function parler(){
        return 'miiiiiiaaaaaaaouuuuuuuu miiiaaaaaaaaaaaaouuuuuuu';
    }

    public function __toString() {
        return '[Chat: nom=>'       . $this->getNom() . ']';
    }
}