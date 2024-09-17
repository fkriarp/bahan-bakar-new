<?php
session_start();
require "proses.php";

if (isset($_POST["submit"])) {
    $proses = new Shell;
    $proses->setHarga(15200, 16400, 18300, 17500);
    $proses->setJumlah($_POST["jumlahLiter"]);
    $proses->setJenis($_POST["jenis"]);

    $_SESSION['harga'] = $proses->getHarga();
    $_SESSION['jumlahLiter'] = $proses->getJumlah();
    $_SESSION['jenis'] = $proses->getJenis();
    $_SESSION['totalHarga'] = $proses->getTotalHarga();
    $_SESSION['hargaDasar'] = $proses->getHargaDasar();

    header("Location: result.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="layout">
            <span class="typing-wrapper">
                <span class="typing">Selamat Datang di Website Bahan Bakar</span>
              </span>
              <div class="form-group">
                <div class="form-title">Bahan Bakar</div>
                <form action="" method="post">
                    <div class="form-layout">
                        <label for="jenis">Jenis Shell :</label>    
                        <select class="p-5" name="jenis" id="jenis" required>
                            <option value="" disabled selected>-- Jenis Shell --</option>
                            <option value="SSuper">Shell Super</option>
                            <option value="SVPower">Shell V-Power</option>
                            <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                            <option value="SVPowerNitro">Shell V-Power Nitro</option>
                        </select>
                        <label for="jumlahLiter">Jumlah Liter :</label>
                        <input type="number" name="jumlahLiter" id="jumlahLiter" class="p-5" required>
                        <button type="submit" name="submit">Beli</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>