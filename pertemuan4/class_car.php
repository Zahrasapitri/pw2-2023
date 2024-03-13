<?php

    class Car {
        // hak akses: public, private, protected
        //property
        public $brand;
        public $color;

        //method
        function getBrand() {
           return $this->brand;
        }
        function getColor() {
            return $this->color;
        }
    }

    //object
    $tesla = new Car();
    $supra = new Car();


    //set value / setter
    $tesla->brand = 'Tesla';
    $supra->brand = 'Supra';

    $tesla->color = 'Blue';
    $supra->color = 'Black';

    //echo
    echo $tesla->getBrand();
    echo $tesla->getColor();
    echo "<br>";
    echo $supra->getBrand();
    echo $supra->getColor();
?>
