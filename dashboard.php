<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$kode_barang = ["001", "002", "003", "004", "005"];
$nama_barang = ["Mie ayam Komplit", "Mie Ayam", "Nasi Goreng Komplit", "Pop Mie", "Jus"];
$harga_barang = [15000, 12000, 20000, 5000, 8000];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Dashboard</title>
</head>
<body>
    <h1>--POLGAN MART--</h1>
    <p>SELAMAT DATANG TUAN <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php"><button>Logout</button></a>
</body>
</html>