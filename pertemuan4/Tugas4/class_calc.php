<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */

class Calculator {

  private $bil1;
  private $bil2;

  public function __construct($bil1, $bil2) {
    $this->bil1 = $bil1;
    $this->bil2 = $bil2;
  }

  // Method Pertambahan
  public function tambah() {
    return $this->bil1 + $this->bil2;
  }

  // Method Pengurangan
  public function kurang() {
    return $this->bil1 - $this->bil2;
  }

  // Method Pembagian
  public function bagi() {
    return $this->bil1 / $this->bil2;
  }

  // Method Perkalian
  public function kali() {
    return $this->bil1 * $this->bil2;
  }
}

// Buat object dan tampilkan masing-masing method
$calculator = new Calculator(10, 5);

echo "Hasil Pertambahan: " . $calculator->tambah() . "<br>";
echo "Hasil Pengurangan: " . $calculator->kurang() . "<br>";
echo "Hasil Pembagian: " . $calculator->bagi() . "<br>";
echo "Hasil Perkalian: " . $calculator->kali() . "<br>";
?>
