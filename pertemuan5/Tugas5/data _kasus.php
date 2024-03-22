<?php
    require_once 'class_kasus.php';

    $facebook = new Facebook('Facebook', "Zahra alya", 200);
    $instagram = new Instagram('Instagram', 'Afifa putri', 1000);
    $twitter = new Twitter('Twitter', 'Dinda Dwi', 500);

    echo "Info Facebook:<br>";
    $facebook->getInfoFacebook();
    echo "<br>";

    echo "Info Instagram:<br>";
    $instagram->getInfoInstagram();
    echo "<br>";

    echo "Info Twitter:<br>";
    $twitter->getInfoTwitter();
    
?>
