<?php
    require 'Personne.php';
    class Admin extends Personne {

        function __construct($id, $nom, $prenom, $mdp, $email,$telephone,$photo,$civilite){
            parent::__construct($id, $nom, $prenom, $mdp, $email,$telephone,$photo,$civilite);
        }
        public function getRole()
        {
            return Personne::ROLE_ADMIN;
        }
        public function __toString() {
            return '[Personne: '. $this->nom . ", " .$this->prenom. "id: ". $this->id ."]" ;
        }
    }
?>