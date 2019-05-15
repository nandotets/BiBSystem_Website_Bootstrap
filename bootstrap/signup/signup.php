<?php
    include_once("../classes/Users.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ( !isset($_POST["cpf"]) || !isset($_POST["fnome"]) || !isset($_POST["email"]) 
        || !isset($_POST["usuario"]) || !isset($_POST["psw"])
        ) {
            header("location: index.php?error=1");
        } else{
            $cpf = $_POST['cpf'];
            $fname = $_POST['fnome'];
            $email = $_POST['email'];
            $user = $_POST['usuario'];
            $password = $_POST['psw'];
        }
        
        $gender = (isset($_POST['gender'])) ? $_POST['gender'] : null;
        $birth = (isset($_POST['datebirth'])) ? $_POST['datebirth'] : null;
        $lname = (isset($_POST['lnome'])) ? $_POST['lnome'] : null;
        $tel = (isset($_POST['tel'])) ? $_POST['tel'] : null;
        $cel = (isset($_POST['cel'])) ? $_POST['cel'] : null;
        $cep = (isset($_POST['cep'])) ? $_POST['cep'] : null;
        $lograd = (isset($_POST['logradouro'])) ? $_POST['logradouro'] : null;
        $num = (isset($_POST['numero'])) ? $_POST['numero'] : null;
        $compl = (isset($_POST['comp'])) ? $_POST['comp'] : null;
        $district = (isset($_POST['bairro'])) ? $_POST['bairro'] : null;
        $city = (isset($_POST['cidade'])) ? $_POST['cidade'] : null;
        $uf = (isset($_POST['uf'])) ? $_POST['uf'] : null;

        $Usrs = new Users();
        $Usrs->setAdmin(0);
        $Usrs->setCpf($cpf);
        $Usrs->setGender($gender);
        $Usrs->setBirth($birth);
        $Usrs->setFname($fname);
        $Usrs->setLname($lname);
        $Usrs->setEmail($email);
        $Usrs->setTel($tel);
        $Usrs->setCel($cel);
        $Usrs->setCep($cep);
        $Usrs->setLograd($lograd);
        $Usrs->setNum($num);
        $Usrs->setCompl($compl);
        $Usrs->setDistrict($district);
        $Usrs->setCity($city);
        $Usrs->setUf($uf);
        $Usrs->setUser($user);
        $Usrs->setPassword($password);
        if($Usrs->insert()){
            header("location: ../login/");
        } else{
            header("location: index.php?error=2");
        }
    } else{
        header("location: index.php");
    }

?>