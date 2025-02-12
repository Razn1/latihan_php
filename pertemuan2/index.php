<?php
// Pertemuan 2 - Syntax PHP

// Standar Output
// echo, print
// print_r
// var_dump

    echo "Faisa";
    echo "<br>";
    echo 123;
    echo "<br>";
    echo true;
    echo "<br>";
    print "Al";
    echo "<br>";
    print_r("Al");
    echo "<br>";
    var_dump("Farrel");

// Penulisan Syntax PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka

    $nama = "Faisa Al Farrel";
    $para = "Halo, ini adalah paragraf yang disimpan didalam variabel";

    echo "<br>";
    echo "Halo, nama saya adalah $nama";

// Tipe Data
// String
// Integer
// Float
// Boolean

// Operator
// Aritmatika
// + - * / %

    $x = 2;
    $y = 5;

    echo "<br>";
    echo "$x x $y = " . $x * $y;

// String
// . (concatenate)
// .= (concatenate assign)

    $nama = "Faisa";
    $nama .= " ";
    $nama .= "Al Farrel";

    echo "<br>";
    echo $nama;
    // echo $namaDepan . " " . $namaBelakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=

    $a = 5;
    $a .= 2;
    echo "<br>";
    echo $a;

// Comparison
// >, <, >=, <=, ==, !=

    echo "<br>";
    var_dump(5 == "5");

// Identitas
// ===, !==

    echo "<br>";
    var_dump(5 === "5");
    
// Logika
// &&, ||, !

    $c = 20;
    echo "<br>";
    var_dump($c >= 21 || $c >= 20);

// Increment / Decrement
// ++ --
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, <?php //echo $nama; ?></h1>
    <p><? //$para; ?></p>

    <?php
    // echo "<h1>Halo, ini html dalam php</h1>"
    ?>
</body>
</html> -->