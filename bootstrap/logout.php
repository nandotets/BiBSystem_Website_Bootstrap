<?php
    include_once("classes/Users.php");
    $Usrs = new Users();
    $Usrs->destroySession();
    header("location: login");
?>