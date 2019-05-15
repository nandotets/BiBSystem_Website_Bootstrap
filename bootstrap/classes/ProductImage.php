<?php
    include_once("Database.php");

    class ProductImage {
        private $cod;
        private $filename;
        private $description;
        private $published;

        public function __construct(){
            $db = new Database();
            $this->conn = $db->getInstance();
        }

        public function getCod(){
            return $this->cod;
        }

        public function setCod($cod){
            $this->cod = $cod;
        }

        public function getFilename(){
            return $this->filename;
        }

        public function setFilename($filename){
            $this->filename = $filename;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;
        }

        public function getPublished(){
            return $this->published;
        }

        public function setPublished($published){
            $this->published = $published;
        }
        
        public function listImages(){
            $sql="SELECT * FROM productimage";
            $q = $this->conn->prepare($sql);
            $q->execute();
            $data = $q->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
        
    }
?>