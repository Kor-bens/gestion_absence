<?php
abstract class Personne{
    const ROLE_STAGIAIRE = 1;
    const ROLE_FORMATEUR = 2;
    const ROLE_ADMIN = 3;
    
    protected string $id;
    protected string $nom;
    protected string $prenom;
    protected DateTime $date_nais;
    protected string $email;
    protected string $telephone;
    protected string $photo;
    protected string $mdp;
    protected string $civilite;

   public function __construct($id, $nom, $prenom, $mdp, $email,$telephone,$photo,$civilite){
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->mdp=$mdp;
        $this->email=$email;
        $this->telephone=$telephone;
        $this->photo=$photo;
        $this->civilite=$civilite;
    }

    //RETOURNE L'ID DE LA FONCTION DE LA PERSONNE EN INT(1=Stagiaire,2=Formateur,3=Admin);
    abstract public function getRole();

    public function getId(): string { return $this->id; }
    public function setId(string $id): self { $this->id = $id; return $this; }

    public function getNom(): string { return $this->nom; }
    public function setNom(string $nom): self { $this->nom = $nom; return $this; }

    public function getPrenom(): string { return $this->prenom; }
    public function setPrenom(string $prenom): self { $this->prenom = $prenom; return $this; }

    public function getDateNais(): DateTime { return $this->date_nais; }
    public function setDateNais(DateTime $date_nais): self { $this->date_nais = $date_nais; return $this; }

    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): self { $this->email = $email; return $this; }
   
    public function __toString() {
        return '[Personne: '. $this->nom . ", " .$this->prenom. "id: ". $this->id  ."]" ;
    }
} 
?>