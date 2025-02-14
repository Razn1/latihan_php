<?php 
// Date
// untuk menampilkan tanggal dengan format tertentu
    // echo date("l,d-M-Y");

// Time
// UNIX Timestamp
// detik yang sudah berlalu sejak 1 januari 1970
    // echo time();
    // echo date("l, d-M-Y", time()-60*60*24*100);

// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,4,5,2006));

// strtotime
// menginput tanggal dalam bentuk string
echo date("l", strtotime("5 April 2006"));
?>