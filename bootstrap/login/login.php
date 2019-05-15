<?php
    include_once("../classes/Users.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ( !isset($_POST["user"]) || !isset($_POST["password"])){
            header("location: index.php?error=1");
        } 

        $user = $_POST['uname'];
        $password = $_POST['psw'];

        $Usrs = new Users();
        $Usrs->setUser($user);
        $Usrs->setPassword($password);

        if($Usrs->login()){
            header("location: ../account");           
        } else{
            header("location: index.php?error=2");
        }
    } else{
        header("location: index.php");
    }

?>