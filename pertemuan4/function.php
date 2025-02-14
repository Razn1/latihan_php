<?php
    date_default_timezone_set("Asia/Jakarta"); // Pastikan zona waktu sesuai

    function getWaktu() {
        $jam = date("H"); // Mengambil jam saat ini dalam format 24 jam

        if ($jam >= 5 && $jam < 12) {
            return "Pagi";
        } elseif ($jam >= 12 && $jam < 15) {
            return "Siang";
        } elseif ($jam >= 15 && $jam < 18) {
            return "Sore";
        } else {
            return "Malam";
        }
    }

    function halo($nama = "Admin") {
        return "Selamat " . getWaktu() . ", $nama!";
    }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= halo("Al"); ?></h1>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php 
        // echo halo(getWaktu(), "Al"); 
    ?></h1>
</body>
</html> -->
