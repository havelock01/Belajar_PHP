<?php
// Date => untuk menampilkan tanggal
// dengan format tertentu.
echo date("l, d-M-Y");

echo ("<br>");

// Time
// ketika ga ada parameter di fungsi time
// akan menampilkan hal berikut :
// UNIX Timestamp atau EPOCH time, yaitu
// detik yang sudah berlalu sejak 1 januari 1970
echo time();

echo ("<br>");
// Check 2 hari kedepan
echo date("l", time() + 172800);

echo ("<br>");
// mktime
// membuat sendiri detik yang sudah berlalu
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0, 0, 0, 11, 18, 1999));

echo ("<br>");

// strtotime
echo date("l", strtotime("18 nov 1999"));
?>