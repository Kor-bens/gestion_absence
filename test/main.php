<?php 
require_once 'Personne.php';
require_once 'Chien.php';


$chien = new Chien('titus');
$chien1 = new Chien();
$chien2 = new Chien(null);

$chien->setNom('pipi');


var_dump($chien);
var_dump($chien1);
var_dump($chien2);

echo 'Mon chien se nomme ' .$chien->getNom();

$pers1 = new Personne('marc', 'poli',null);
$pers2 = new Personne('marc','pliz',$chien);
$pers2->setNom('jules');

var_dump($pers1);
var_dump($pers2);


echo($pers1);
echo($pers2);

