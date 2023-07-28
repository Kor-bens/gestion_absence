<?php
    class Requete {
        public const  REQ_INS_PERS='INSERT INTO 
        personne(id_pers, nom, prenom, email, mdp, civilite,nb_enfants, offre_stag, id_fonction, telephone)
        VALUES(?,?,?,?,?,?,?,?,?,?)';
           public const LISTE_OFFRES='SELECT id_offre, lib_offre FROM offre order by lib_offre';
           public const LISTE_FONCTIONS='SELECT id_fonction, nom_fonction FROM fonction order by nom_fonction';
    }
?>