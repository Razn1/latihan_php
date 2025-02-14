<?php 
// Array
// Variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang diawali dengan angka 0

// membuat array
// cara lama 
// nilai uang ada di dalam array disebut elemen
$hari = array("Senin", "Selasa", "Rabu");

// cara baru 
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$arr1 = [123, "Al", True];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// echo "<br>";
// echo $arr1[2];
// echo "<br>";
// echo $bulan[11];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis"; 
$hari[] = "Jumat"; 
echo "<br>";
var_dump($hari)
?>