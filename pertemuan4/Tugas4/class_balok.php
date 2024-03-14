<?php

class Balok {
    private $panjang;
    private $lebar;
    private $tinggi;

    public function __construct($p, $l, $t) {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function getLuas() {
        return $this->panjang * $this->lebar;
    }

    public function getKeliling() {
        return 2 * ($this->panjang + $this->lebar + $this->tinggi);
    }

    public function getVolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}

?>