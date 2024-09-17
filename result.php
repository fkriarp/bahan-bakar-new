<?php
session_start();
require "proses.php";

// Memastikan bahwa session data tersedia
if (isset($_SESSION['jumlahLiter'])) {
    $jumlahLiter = $_SESSION['jumlahLiter'];
    $harga = $_SESSION['harga'];
    $jenis = $_SESSION['jenis'];
    $totalHarga = $_SESSION['totalHarga'];
    $ppn = $_SESSION["ppn"];
    $hargaDasar = $_SESSION["hargaDasar"];
} else {
    // Jika tidak ada data dalam session, mungkin bisa tampilkan pesan error atau redirect
    echo "Tidak ada data untuk ditampilkan.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pembayaran</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="card-to-center">
        <div class="card">
            <div class="card-body">
                <div class="primary-header">Bukti Transaksi Pembayaran</div>
                <div class="information">
                <ul>
                    <li>Jenis Bahan Bakar: <?= htmlspecialchars($jenis) ?></li>
                    <li>Jumlah Liter: <?= htmlspecialchars($jumlahLiter) ?> Liter</li>
                    <li>Harga per Liter: Rp <?= number_format($harga, 2, ',', '.') ?></li>
                    <li>Harga Dasar: Rp <?= number_format($hargaDasar, 2, ',', '.') ?></li>
                    <li>PPN (10%): Rp <?= number_format($totalHarga * $ppn, 2, ',', '.') ?></li>
                </ul>
                </div>
                <div class="total-price">
                    Total Harga : Rp  <?= number_format($totalHarga, 2, ',', '.') ?>
                </div>
                <div class="back-to">
                    <a href="index.php">Kembali</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>