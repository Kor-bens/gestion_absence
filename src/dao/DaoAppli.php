<?php
require_once 'src/dao/Requete.php';
require_once 'src/dao/DbClass.php';
class DaoAppli
{

    private PDO $db;
    public function __construct(){
        $dbObjet = new DbClass();
        $this->db = $dbObjet->getDb();
        
    }
    public function addPersonne($id_personne, $nom, $prenom, $email, $password, $civilite, $nombre_enfant, $offre, $fonction, $telephone){
       $requete = $this->db->prepare(Requete::REQ_INS_PERS);
        $value   = $requete->execute(array($id_personne, $nom, $prenom, $email, $password, $civilite, $nombre_enfant, $offre, $fonction, $telephone));
    
    }

    public function recupFonctions(){
        $requete = Requete::LISTE_FONCTIONS;
        $statement = $this->db->query($requete);
         $liste = [];
         while ($row = $statement->fetch()) {
            $id = $row['id_fonction'];
            $nom = $row['nom_fonction'];
            $fonction = new Fonction($id, $nom);
            array_push($liste, $fonction);
        }
        return $liste;
    }

    public function recupOffres(){
        $requete = Requete::LISTE_OFFRES;
        $statement = $this->db->query($requete);
        $liste = [];
        while ($row = $statement->fetch()) {
            $id = $row['id_offre'];
            $libelle = $row['lib_offre'];
            $offre = new Offre($id, $libelle);
            array_push($liste, $offre);
       }   
       return $liste;
    }


    
    
}