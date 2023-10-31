<?php
    // Standar output
    echo "Hello World!<br>";
    print "My name is Muhammad Rizqi<br>";
    print_r("I'm beginner developer<br>");
    var_dump("Learn something new everyday");
    echo "<br>".true;
    
// Penulisan sintaks PHP
    // 1. HTML di dalam PHP

    echo '<h1>HTML di dalam PHP</h1>';
?>

<!DOCTYPE html>
<!-- 2. PHP di dalam HTML -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php 
            echo "PHP di dalam HTML";
        ?>
    </h2>
</body>
</html>

<?php 
//Variabel dan Tipe Data
    //Variabel => tidak boleh diawali angka, tapi boleh mengandung angka, ga boleh ada spasi
    $nama = "Qi.B";
    echo "Nama Panggilanku $nama <br>";

    // ada masalah interpolasi di petik 2 dan petik 1. Nanti lihat lg dokumentasinya

    // Operator
    // aritmatika
    // + - * / %
    $x = 10;
    $y = 20;
    echo $x*$y;
    echo "<br><br><br>";

    // Operator penggabung string (concatenation/concat) operatornya itu yaitu titik (.)

    $jurusan = "Informatika";
    $fakultas = "Teknik Industri";
    echo "Jurusan ". $jurusan .", Fakultas ". $fakultas . "<br>";

    // Assignment => =, +=, -=, *=, /=, %=, .=
    $number = 5;
    $number += 2;
    echo "<br>". $number. "<br>";

    $nama2 = "Muhammad";
    $nama2 .= " ";
    $nama2 .= "Rizqi";
    echo $nama2. "<br><br>";
    
    // Perbandingan => <, >, <=, >=, ==, !=
    var_dump(1<5);
    echo "<br>";
    echo "<br>";
    // tapi kalau misal gini :
    var_dump(1=="1");
    echo "<br>";
    echo "<br>";
    // dia akan true karena di var_dump hanya ngecek nilainya bukan tipe datanya

    //untuk bisa ngecek identitasnya ada caranya :
    // Dengan "Identitas" => ===, !==
    var_dump(1==="1");
    echo "<br>";
    echo "<br>";

    // Operator logika => &&, ||, !
    $z= 10;
    var_dump($z<20 && $x%2==0);
?>