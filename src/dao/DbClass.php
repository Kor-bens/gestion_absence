<?php 
class DbClass
{
    private PDO $db;
    public function __construct(){
        try{
        $this->db = new PDO('mysql:host=localhost;dbname=gestion_absence;charset=utf8', 'korbens', 'korbens13');
            }catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
    }

    public function getDb(){
        return $this->db;
    }
}

