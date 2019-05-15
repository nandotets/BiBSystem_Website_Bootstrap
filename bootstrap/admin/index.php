<?php
    include_once("../classes/Users.php");
    $Usrs = new Users();
    ($Usrs->accessDashboard()) ? header("location: pages/index.php") : header("location: ../account");
?>