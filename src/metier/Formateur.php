<?php
require_once 'Offre';
class Formateur extends Personne {
    private array $offres;
    public function getRole()
        {
            return Personne::ROLE_FORMATEUR;
        }
        function __construct($id, $nom, $prenom, $mdp, $email,$telephone,$photo,$civilite,$offres=[]){
            parent::__construct($id, $nom, $prenom, $mdp, $email,$telephone,$photo,$civilite);
            $this->offres=$offres;
        }
        //Ajouter une offre
        public function addOffre(Offre $offre){
            array_push($this->offres, $offre);
        }
        public function getOffres(): array { return $this->offres; }
        public function setOffres(array $offres): self { $this->offres = $offres; return $this; }

        public function __toString() {
            $mesOffres='';
            foreach($this->offres as $offre ){
                $mesOffres .= $offre;
            }
            return '[Formateur: '. $this->nom . ", " .$this->prenom . ",offres:[" . $mesOffres . "]]" ;
        }
    }
?>