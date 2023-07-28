<?php

class Offre
{
    private string $id;
    private string $libelle;
    private Formation $formation;


    public function __construct($id, $libelle) 
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }

    public function getFormation(): Formation { return $this->formation; }
    public function setFormation(Formation $formation): self { $this->formation = $formation; return $this; }
    
    public function getLibelle(): string { return $this->libelle; }
    public function setLibelle(string $libelle): self { $this->libelle = $libelle; return $this; }

    public function getId(): string { return $this->id; }
    public function setId(string $id): self { $this->id = $id; return $this; }

   public function __toString(){
    return '[Offre=>'.$this->id .' ' .$this->libelle . ' Formation=>'  .$this->formation . ']';
   }

}


?>