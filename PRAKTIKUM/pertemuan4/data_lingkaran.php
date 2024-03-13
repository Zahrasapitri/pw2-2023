<?php

    require_once "class_lingkaran.php";

    echo "Nilai PHI = " . Lingkaran::PHI;
    $lingkaran1 = new Lingkaran ( 8 );
    $lingkaran2 = new Lingkaran ( 27 );

    echo '<br><br>';
    echo "<br/>Luas Lingkaran 1 adalah = " .$lingkaran1->getLuas() . "cm";
    echo "<br/>Luas Lingkaran 2 adalah = " .$lingkaran2->getLuas() . "cm";
    
    echo '<br><br>';
    echo "<br/>Keliling Lingkaran 1 adalah = " . $lingkaran1->getKeliling() . "cm";
    echo "<br/>Keliling Lingkaran 2 adalah = " . $lingkaran2->getKeliling() . "cm";
?>