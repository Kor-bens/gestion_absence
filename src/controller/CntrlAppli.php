<?php  
require_once ('src/controller/Message.php');
require_once 'src/metier/Fonction.php';
require_once 'src/metier/Offre.php';
require_once 'src/dao/Requete.php';
require_once 'src/dao/DaoAppli.php';

class CntrlAppli{
    

    public function getIndex(){
        require('src/view/index.php');
    }

    public function affFormInscription(){
       $dao = new DaoAppli();
       $fonctions = $dao->recupFonctions();
       $offres    = $dao->recupOffres();
        require_once('src/view/inscription.php');
    }

     public function inscrire(){
      
        
        //RECUPERATION DES DONNEES DU FORMULAIRE
          
        
        //variables
        $nom                = htmlspecialchars($_POST['nom']);
        $prenom             = htmlspecialchars($_POST['prenom']);
        // $date_naiss         = htmlspecialchars($_POST['date_naissance']);
        $email              = htmlspecialchars($_POST['email']);
        $email_confirm      = htmlspecialchars($_POST['email_confirm']);
        $password           = htmlspecialchars($_POST['password']);
        $password_confirm   = htmlspecialchars($_POST['password_confirm']);
        $telephone          = htmlspecialchars($_POST['telephone']);
        $fonction           = htmlspecialchars($_POST['fonction']);
        $id_personne        = htmlspecialchars($_POST['id_pers']);
        $offre              = htmlspecialchars($_POST['offre']);
        $civilite           = htmlspecialchars($_POST['civilite']);
        $nombre_enfant      = htmlspecialchars($_POST['nombre_enfant']);
    
        
        
        
        $messageErr=[];
        $i=-1;
        // On verifie lee OSIA OU CODE AGENT
        if (empty($id_personne)){
            $messageErr[$i++]= Message::INS_ERR_OSIA;
        }
        // On verifie le nom
        if (empty($nom)){
            $messageErr[$i++] = Message::INS_ERR_NOM;
        }
        // On verifie le prénom
        if (empty($prenom)){
            $messageErr[$i++] = Message::INS_ERR_PRENOM;
        }
        // On verifie le password
        if (empty($password)){
            $messageErr[$i++] = Message::INS_ERR_MDP;
        }
        // On verifie que les passwords ne sont pas identiques
        if ($password != $password_confirm) {
            $messageErr[$i++] = Message::INS_ERR_MDP_CONF;
        }
        // On verifie le email
        if (empty($email)){
            $messageErr[$i++] = Message::INS_ERR_MAIL;
        }
        // On verifie que les emails sont identiques
        if ($email != $email_confirm) {
            $messageErr[$i++] = Message::INS_ERR_MAIL_CONF;
        }
        // On verifie la fonction
        if (empty($fonction)){
            $messageErr[$i++] = Message::INS_ERR_FONCTION;
        }
        if($messageErr != []){
           $this->affFormInscription();
        }
        
        else{
            $dao = new DaoAppli();
            $dao->addPersonne($id_personne, $nom, $prenom, $email, $password, $civilite, $nombre_enfant, $offre, $fonction, $telephone);
            $messageSuccess = 'Vous etes desormais inscrit';
            require_once('src/view/index.php');
        }
        
        
        //REDIRECTION
        // $messageSuccess = Message::INS_OK;
        // require ('index.php');
    }
   
    }

   
   
