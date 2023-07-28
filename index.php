<?php 
require_once "src/dao/Requete.php";
require_once "src/metier/Fonction.php";
require_once "src/metier/Offre.php";
require_once("src/controller/CntrlAppli.php");



$method = $_SERVER["REQUEST_METHOD"];
$route   =explode("?",$_SERVER["REQUEST_URI"])[0];

$cntrlAppli = new CntrlAppli();

if      ($method=='GET' && $route == '/inscription')   $cntrlAppli->affFormInscription();
elseif  ($method=='POST' && $route == '/inscription')  $cntrlAppli->inscrire();
else                                                   $cntrlAppli->getIndex();
