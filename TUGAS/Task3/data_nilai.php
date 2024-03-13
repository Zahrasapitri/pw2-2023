<?php
    include_once 'header.php'
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php

                    include_once 'libfungsi.php';
                    if (isset($_POST['submit'])) {
        
                        $nama_lengkap = $_POST['Namalengkap'];
                        $matkul = $_POST['matkul'];
                        $nilai_uts = $_POST['NilaiUTS'];
                        $nilai_uas = $_POST['NilaiUAS'];
                        $nilai_praktik = $_POST['NilaiTUGAS'];

                        $uts = $_POST['NilaiUTS'];
                        $uas = $_POST['NilaiUAS'];
                        $praktik = $_POST['NilaiTUGAS'];
                        $rata_rata = rata_rata($uts, $uas, $praktik);

                        $nilai = grade($rata_rata);

                        $hasil =  kelulusan($nilai);

                        echo "<tr>";
                        echo "<td>3</td>"; 
                        echo "<td>$nama_lengkap</td>";
                        echo "<td>$matkul</td>";
                        echo "<td>$nilai_uts</td>";
                        echo "<td>$nilai_uas</td>";
                        echo "<td>$nilai_praktik</td>";
                        echo "<td>$rata_rata</td>";
                        echo "<td>$nilai[0]</td>";
                        echo "<td>$nilai[1]</td>";
                        echo "<td>$hasil</td>";
                        echo "</tr>";
                    }
?>
