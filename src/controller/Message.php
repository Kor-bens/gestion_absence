<?php
// enum
class Message {
    public const INS_SUCCESS ="Inscription OK";
    public const INS_ERR_OSIA ='Le OSIA ou Agent doit être renseigné!'; 
    public const INS_ERR_NOM ='Le nom doit être renseigné!';
    public const INS_ERR_PRENOM ='Le prénom doit être renseigné!'; 
    public const INS_ERR_MAIL ='Le mail doit être renseigné!';
    public const INS_ERR_MAIL_CONF ='Les emails doivent être identique!';
    public const INS_ERR_MDP_CONF ='Les mots de passe doivzent être identique!';   
    public const INS_ERR_MDP ='Le mot de passe doit être renseigné!'; 
    public const INS_ERR_FONCTION ='La fonction doit être renseigné!'; 
}   
?>