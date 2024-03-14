<?php

    require_once "class_balok.php";

    $balok1 = new Balok(29, 16, 7);


    echo '<br><br>';
    echo "Luas Balok 1: " . $balok1->getLuas() . "cm" . "<br>";
    
    echo '<br><br>';
    echo "Keliling Balok 1: " . $balok1->getKeliling() . "cm" . "<br>";
    
    echo '<br><br>';
    echo "Volume Balok 1: " . $balok1->getVolume() . "cm" . "<br><br>";

?>