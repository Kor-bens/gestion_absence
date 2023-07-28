<?php
    class Formation {
        private string $id;
        private string $libelle; 
        private string $sigle;

        public function __construct($id, $libelle, $sigle){
            $this->id =     $id;
            $this->libelle =$libelle;
            $this->sigle =  $sigle;
        }
        
        public function __toString() {
            return '[Formation id: '. $this->id . ", " .$this->libelle. "id: ". $this->sigle . "]" ;
        }

      
        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;
                return $this;
        }

        public function getLibelle()
        {
                return $this->libelle;
        }

        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;

                return $this;
        }

        public function getSigle()
        {
                return $this->sigle;
        }

        public function setSigle($sigle)
        {
                $this->sigle = $sigle;

                return $this;
        }
    }
?>