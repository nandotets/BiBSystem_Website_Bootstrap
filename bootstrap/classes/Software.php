<?php
    include_once("Database.php");

    class Software {
        private $cod;
        private $version;
        private $published;
        private $patchnote;
        private $filename;

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

        public function getVersion(){
            return $this->version;
        }

        public function setVersion($version){
            $this->version = $version;
        }

        public function getPublished(){
            return $this->published;
        }

        public function setPublished($published){
            $this->published = $published;
        }

        public function getPatchnote(){
            return $this->patchnote;
        }

        public function setPatchnote($patchnote){
            $this->patchnote = $patchnote;
        }

        public function getFilename(){
            return $this->filename;
        }

        public function set($filename){
            $this->filename = $filename;
        }

        public function listSoftwares($order = null){
            $sql="SELECT * FROM `software` ORDER BY `version` DESC";
            $q = $this->conn->prepare($sql);
            $q->execute();
            $data = $q->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }


    }
?>