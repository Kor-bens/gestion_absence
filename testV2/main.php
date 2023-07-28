<?php
require_once 'Personne.php';
require_once 'Chienx.php';


// $pers   = new Personne(); // n'est plus possible
$chien = new Chienx();
$chien->setNom("spiderman");
$chien1 = new Chienx('Titus');
$chien2 = new Chienx('Titas');
$chien3 = new Chienx('Titos');

$pers1  = new Personne('muller','domi');
$pers2  = new Personne('Durand','Paul');
$pers3  = new Personne('Durand','soeur');

$pers1->addChien($chien);
$pers1->addChien($chien1);
$pers2->addChien($chien1);
$pers2->addChien($chien2);
$pers2->addChien($chien3);

echo '<hr>';
echo $pers1;
echo '<br>';
echo $pers2;
echo '<br>';
echo $pers3;
echo '<br>';