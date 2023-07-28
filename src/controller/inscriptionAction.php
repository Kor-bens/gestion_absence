<?php 
require('../controller/Message.php');
require_once('../controller/Requete.php');

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

// echo($id_personne); ?> <br><?php
// echo ($nom); ?> <br><?php
// echo($prenom); ?> <br><?php
// echo($email); ?> <br><?php
// echo($email_confirm); ?> <br><?php
// echo($password); ?> <br><?php
// echo($password_confirm); ?> <br><?php
// echo($civilite); ?> <br><?php
// echo($nombre_enfant); ?> <br><?php
// echo($offre); ?> <br><?php
// echo($fonction); ?> <br><?php
// echo($telephone); ?> <br><?php





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
    require('../view/inscription.php');
}
else{
    //ENVOI DE LA REQUETE
require_once('../dao/db.php');
// $requete = $db->prepare("INSERT INTO personne(id_pers, nom, prenom, email, mdp, civilite, nb_enfants, offre_stag, id_fonction,telephone) VALUES(?,?,?,?,?,?,?,?,?,?)");
$requete = $db->prepare(Requete::REQ_INS_PERS);
$value   = $requete->execute(array($id_personne, $nom, $prenom, $email, $password, $civilite, $nombre_enfant, $offre, $fonction, $telephone));
$messageSuccess = 'Vous etes desormais inscrit';
require_once('../view/index.php');
}


//REDIRECTION
// $messageSuccess = Message::INS_OK;
// require ('index.php');