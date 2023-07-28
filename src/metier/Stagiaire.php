<?php
require_once 'Offre.php';
class Stagiaire extends Personne {
    private Offre $offre;
    public function getRole()
        {
            return Personne::ROLE_STAGIAIRE;
    }
    
    function __construct($id, $nom, $prenom, $mdp, $email,$telephone,$photo,$offre,$civilite){
       parent::__construct($id, $nom, $prenom, $mdp, $email,$telephone,$photo,$civilite);
        $this->offre =      $offre;
       
    }

    public function getOffre(): Offre { return $this->offre; }
    public function setOffre(Offre $offre): self { $this->offre = $offre; return $this; }

    public function __toString() {
            return '[Stagiaire: '. parent::__toString(). ",Offre:[". $this->offre ."]" ;
        }

    
}
?>