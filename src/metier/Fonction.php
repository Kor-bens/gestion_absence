<?php
class Fonction
{
    // propriétés de classe d'instance
    public int $id;
    public string $nom;

    public function __construct($id, $nom)
    {
        $this->id = $id;
        $this->nom = $nom;
    }
    
}

?>