<?php
    $form = $_GET;
    $main_url = "Location: http://localhost:" . $_SERVER['SERVER_PORT'] ."/views/main/?";
    $name = false;
    $email = false;
    //名前30、メール50
    if(mb_strlen($form["name"])> 30){
        $name = true;
    } 
    if(mb_strlen($form["email"]) > 50){
        $email = true;
    }
    if($name || $email){
        header($main_url . "name='". $name . "'email='" . $email ."'");
        exit()
    }
?>
