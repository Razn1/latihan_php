<?php 
// $mahasiswa = [
//     ["Faisa Al Farrel", "0110224149","alfarrel218@gmail.com", "Teknik Informatika"],
//     ["Saya", "0110321321", "saya@gmail.com", "Teknik Informatika"],
//     ["Kamu", "01103213221", "kamu@gmail.com", "Teknik Informatika"],
// ];

// Array Asosiatif
// Definisinya sama seperti array numerik, namun
// Key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Faisa Al Farrel",
        "nim" => "0110224149",
        "email" => "alfarrel218@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "changli.jpg"
    ],
    [
        "nama" => "Al Farrel",
        "nim" => "0110999999",
        "email" => "alfarrel99@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar"=> "butterfly.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 576px;
            height: 324px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nim : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>

