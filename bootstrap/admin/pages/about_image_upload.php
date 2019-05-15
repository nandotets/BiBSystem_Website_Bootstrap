<?php
    include_once("../../classes/Users.php");
    include_once("../../classes/About.php");
    include_once("../../classes/ProductImage.php");
    $Usrs = new Users();
    $About = new About();
    $Pimg = new ProductImage();
    if (!$Usrs->accessDashboard()) header("location: ../../account");
?>