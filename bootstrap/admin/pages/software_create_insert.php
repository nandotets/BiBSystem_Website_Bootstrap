<?php
    include_once("../../classes/Users.php");
    include_once("../../classes/Software.php");
    $Usrs = new Users();
    $Soft = new Software();
    if (!$Usrs->accessDashboard()) header("location: ../../account");


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ( !isset($_POST["versao"]) || !isset($_POST["nota"]) || !isset($_POST["softwarefile"]) ) {
            header("location: software_create.php?error=1");
        }
        $version = $_POST['versao'];
        $patchnote = $_POST['nota'];
        $softwarefile = $_POST['softwarefile'];
        $published = date(now());
        $Soft->setVersion(0);
        if($Usrs->insert()){
            header("location: ../login/");
        } else{
            header("location: index.php?error=2");
        }
    } else{
        header("location: index.php");
    }

?>