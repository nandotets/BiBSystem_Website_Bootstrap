<?php
    include_once("Database.php");

    class About {
        private $cod;
        private $companyname;
        private $email;
        private $country;
        private $zipcode;
        private $state;
        private $city;
        private $streetaddress1;
        private $streetaddress2;
        private $textabout;

        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->getInstance();
            $data = $this->getAbout();
            $this->setCod($data->cod);
            $this->setCompanyname($data->companyname);
            $this->setEmail($data->email);
            $this->setCountry($data->country);
            $this->setZipcode($data->zipcode);
            $this->setState($data->state);
            $this->setCity($data->city);
            $this->setStreetaddress1($data->streetaddress1);
            $this->setStreetaddress2($data->streetaddress2);
            $this->setTextabout($data->textabout);
        }
        
        public function getCod() {
            return $this->cod;
        }

        public function setCod($cod) {
            $this->cod = $cod;
        }

        public function getCompanyname() {
            return $this->companyname;
        }

        public function setCompanyname($companyname) {
            $this->companyname = $companyname;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getCountry() {
            return $this->country;
        }

        public function setCountry($country) {
            $this->country = $country;
        }

        public function getZipcode() {
            return $this->zipcode;
        }

        public function setZipcode($zipcode) {
            $this->zipcode = $zipcode;
        }

        public function getState() {
            return $this->state;
        }

        public function setState($state) {
            $this->state = $state;
        }

        public function getCity() {
            return $this->city;
        }

        public function setCity($city) {
            $this->city = $city;
        }

        public function getStreetaddress1() {
            return $this->streetaddress1;
        }

        public function setStreetaddress1($streetaddress1) {
            $this->streetaddress1 = $streetaddress1;
        }

        public function getStreetaddress2() {
            return $this->streetaddress2;
        }
        
        public function setStreetaddress2($streetaddress2) {
            $this->streetaddress2 = $streetaddress2;
        }

        public function getTextabout() {
            return $this->textabout;
        }

        public function setTextabout($textabout) {
            $this->textabout = $textabout;
        }

        public function getAbout() {
            $sql="SELECT * FROM about ORDER BY cod DESC LIMIT 0, 1";
            $q = $this->conn->prepare($sql);
            $q->execute();
            $data = $q->fetch(PDO::FETCH_OBJ);
            return $data;
        }



    }

?>