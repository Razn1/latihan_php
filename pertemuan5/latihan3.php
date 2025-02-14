<?php
$mhs = [
    ["Faisa Al Farrel", "0110224149", "Teknik Informatika", "alfarrel218@gmail.com"],
    ["Saya", "0110321321", "Teknik Informatika", "saya@gmail.com"],
    ["Kamu", "01103213221", "Teknik Informatika", "kamu@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mhs as $m) : ?>
    <ul>
        <?php 
        // foreach ($m as $a) : 
        ?>
            <!-- <li>
                <?php
                    // echo $a;
                ?>
            </li> -->
        <?php 
        // endforeach; 
        ?>
        <li>Nama :
                <?php
                echo $m[0];
                ?>
        </li>
        <li>NIM :
            <?php
                echo $m[1];
            ?>
        </li>
        <li>Jurusan :
            <?php
                echo $m[2];
            ?>
        </li>
        <li>Email :
            <?php
                echo $m[3];
                ?>
        </li>
    </ul>
    <?php endforeach; ?>
</body>

</html>