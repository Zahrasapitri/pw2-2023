<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$kartu = new Kartu($db);

if(isset($_POST['update'])) {
    $kartu->id = $_POST['id'];
    $kartu->nama = $_POST['nama'];
    $kartu->no_kartu = $_POST['no_kartu'];
    $kartu->pin = $_POST['pin'];
    $kartu->saldo = $_POST['saldo'];
    $kartu->user_id = $_POST['user_id'];

    $kartu->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $kartu->id = $_GET['id'];
    $stmt = $kartu->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" required>
        <br>
        <label for="no_kartu">No Kartu:</label>
        <input type="text" name="no_kartu" value="<?php echo $no_kartu; ?>" required>
        <br>
        <label for="pin">PIN:</label>
        <input type="text" name="pin" value="<?php echo $pin; ?>" required>
        <br>
        <label for="saldo">Saldo:</label>
        <input type="number" name="saldo" value="<?php echo $saldo; ?>" required>
        <br>
        <label for="user_id">User ID:</label>
        <input type="number" name="user_id" value="<?php echo $user_id; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>