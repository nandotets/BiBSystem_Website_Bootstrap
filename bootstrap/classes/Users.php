<?php
    include_once("Database.php");

class Users {
    
    private $id;
    private $admin;
    private $cpf;
    private $gender;
    private $birth;
    private $fname;
    private $lname;
    private $email;
    private $tel;
    private $cel;
    private $cep;
    private $lograd;
    private $num;
    private $compl;
    private $district;
    private $city;
    private $uf;
    private $user;
    private $password;


    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getInstance();
    }

    public function sets($id,$admin,$cpf,$gender,$birth,$fname,$lname,$email,$tel,$cel,
    $cep,$lograd,$num,$compl,$district,$city,$uf,$user,$password){
        $this->setId($id);
        $this->setAdmin($admin);
        $this->setCpf($cpf);
        $this->setGender($gender);
        $this->setBirth($birth);
        $this->setFname($fname);
        $this->setLname($lname);
        $this->setEmail($email);
        $this->setTel($tel);
        $this->setCel($cel);
        $this->setCep($cep);
        $this->setLograd($lograd);
        $this->setNum($num);
        $this->setCompl($compl);
        $this->setDistrict($district);
        $this->setCity($city);
        $this->setUf($uf);
        $this->setUser($user);
        $this->setPassword($password);

        $db = new Database();
        $this->conn = $db->getInstance();
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

    public function getAdmin()
    {
        return $this->admin;
    }

    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    public function getBirth()
    {
        return $this->birth;
    }

    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    public function getFname()
    {
        return $this->fname;
    }

    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    public function getLname()
    {
        return $this->lname;
    }

    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    public function getCel()
    {
        return $this->cel;
    }

    public function setCel($cel)
    {
        $this->cel = $cel;

        return $this;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    public function getLograd()
    {
        return $this->lograd;
    }

    public function setLograd($lograd)
    {
        $this->lograd = $lograd;

        return $this;
    }

    public function getNum()
    {
        return $this->num;
    }

    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    public function getCompl()
    {
        return $this->compl;
    }

    public function setCompl($compl)
    {
        $this->compl = $compl;

        return $this;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function insert() {
        try {
            $sql="INSERT INTO users(admin,cpf,gender,birth,fname,lname,email,tel,cel,cep,lograd,num,compl,district,city,uf,user,password) VALUES(:admin,:cpf,:gender,:birth,:fname,:lname,:email,:tel,:cel,:cep,:lograd,:num,:compl,:district,:city,:uf,:user,:password)";
            $q = $this->conn->prepare($sql);
            $q->bindValue(":admin",$this->admin);
            $q->bindValue(":cpf",$this->cpf);
            $q->bindValue(":gender",$this->gender);
            $q->bindValue(":birth",$this->birth);
            $q->bindValue(":fname",$this->fname);
            $q->bindValue(":lname",$this->lname);
            $q->bindValue(":email",$this->email);
            $q->bindValue(":tel",$this->tel);
            $q->bindValue(":cel",$this->cel);
            $q->bindValue(":cep",$this->cep);
            $q->bindValue(":lograd",$this->lograd);
            $q->bindValue(":num",$this->num);
            $q->bindValue(":compl",$this->compl);
            $q->bindValue(":district",$this->district);
            $q->bindValue(":city",$this->city);
            $q->bindValue(":uf",$this->uf);
            $q->bindValue(":user",$this->user);
            $q->bindValue(":password",$this->password);
            if ($q->execute()) {
                return true;
            }
        }
        catch( PDOException $Exception ) {
            //throw new Exception( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
            return false;
        }
        return false;
    }

    public function listUsers($order = null, $direction = null){
        $sql="SELECT * FROM `users` ORDER BY `fname` ASC";
        $q = $this->conn->prepare($sql);
        $q->execute();
        $data = $q->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function listAdmin($order = null){
        $sql="SELECT * FROM `users` WHERE admin = 1 ORDER BY `fname` ASC";       
        $q = $this->conn->prepare($sql);
        $q->execute();
        $data = $q->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function selectById() {
        $sql="SELECT * FROM users where id = :id";
        $q = $this->conn->prepare($sql);
        $q->bindValue(":id",$this->id);
        $q->execute();
        if($d = $q->fetch(PDO::FETCH_OBJ)){
            $this->sets($d->id,$d->admin,$d->cpf,$d->gender,$d->birth,$d->fname,
            $d->lname,$d->email,$d->tel,$d->cel,$d->cep,$d->lograd,$d->num,$d->compl,
            $d->district,$d->city,$d->uf,$d->user,$d->password);
        }
        return $d;
    }

    public function login(){
        $sql="SELECT * FROM users where user = :user and password = :password";
        $q = $this->conn->prepare($sql);
        $q->bindValue(":user",$this->user);
        $q->bindValue(":password",$this->password);
        $q->execute();
        if($d = $q->fetch(PDO::FETCH_OBJ)){
            $this->sets($d->id,$d->admin,$d->cpf,$d->gender,$d->birth,$d->fname,
            $d->lname,$d->email,$d->tel,$d->cel,$d->cep,$d->lograd,$d->num,$d->compl,
            $d->district,$d->city,$d->uf,$d->user,$d->password);
        }
        $this->initSession();
        return $d;
    }
    
    private function initSession(){
        $data = $this->selectById();
        if(!$data){
            return false;
        }
        if (!isset($_SESSION)) session_start();
        $_SESSION['user']['logged']  = true;
        $_SESSION['user']['id'] = $this->id;
        $_SESSION['user']['name'] = $this->fname;
        return true;
    }

    public function destroySession(){
        if (!isset($_SESSION)) session_start();
        session_destroy();
    }

    public function isLogged() {
        if (!isset($_SESSION)) session_start();
        if (!isset($_SESSION['user']['logged']) || $_SESSION['user']['logged'] == false) {
            return false;
        }
        return true;
    }

    public function isAdmin() {
        $data = $this->selectById();
        if(!$data){
            return false;
        }
        return ($this->admin == 1) ? true : false;
    }

    public function accessDashboard(){
        if(!$this->isLogged()) return false;
        if (!isset($_SESSION)) session_start();
        $this->setId($_SESSION['user']['id']);
        if($this->isAdmin() == true){
            return true;
        }
        return false;
    }
}


?>