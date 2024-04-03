<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$kartu = new Kartu($db);

if(isset($_POST['tambah'])){
    $kartu->nama = $_POST['nama'];
    $kartu->no_kartu = $_POST['no_kartu'];
    $kartu->pin = $_POST['pin'];
    $kartu->saldo = $_POST['saldo'];
    $kartu->user_id = $_POST['user_id'];

    $kartu->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="no_kartu">No Kartu:</label>
        <input type="text" name="no_kartu" required>
        <br>
        <label for="pin">PIN:</label>
        <input type="text" name="pin" required>
        <br>
        <label for="saldo">Saldo:</label>
        <input type="number" name="saldo" required>
        <br>
        <label for="user_id">User ID:</label>
        <input type="number" name="user_id" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>