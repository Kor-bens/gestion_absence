<?php
require_once 'Personne.php';
require_once 'Chienx.php';
require_once 'Chat.php';

class Main {

// private Animal $animal1;
// private Animal $animal2;
// private Animal $animal3;

static public function init(){
        $chien = new Chienx('Titus');
        $chat = new Chat('Miaouss');
        Main::affiche($chien);
        Main::affiche($chat);
        
        $animal1 = new Chienx('totochien');
        $animal2 = new Chat('totochat');
        $animal3 = new Personne('zoro','mag');
        Main::affiche($animal1);
        Main::affiche($animal2);
        var_dump($animal3);
        

        $animaux = [];
        array_push($animaux, $animal1);
        array_push($animaux, $animal2);
        foreach($animaux as $animal){
            Main::affiche ($animal->parler());
        }
    }
   static function affiche($var){
        echo '<br>';
        echo $var;
    }

    }
    Main::init();