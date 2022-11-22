<?php
// sintaks PHP

// standar Output
echo "Nugraha panca wibisana, ";
print "X RPL 2, ";
print_r("Umur 15 tahun, ");
var_dump("SMKN 1 Subang");
?>
<?php 
// ini Untuk Output

// penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Nugraha <?php echo $nama; ?></h1>
    <?php
    echo "<h1>Wibisana</h1>";
    ?>
</body>

</html>
<?php 
// Variable dan Tipe Data
$nama = "Panca Wibisana";


// operator
// aritmatika
// + - * / %
$x = 1001;
$y = 10;
echo $x + $y;
echo $x - $y;
echo $x * $y;
echo $x / $y;
echo $x % $y;
?>
<?php 
// penggabungan string | concatenation | concat
// .
// assigment
// =, +=, -+, *=, /=, %=, .=
$x = 1001;
$x -= 10;
$nama_depan = "Nugraha";
$nama_tengah = "panca";
$nama_belakang = "wibisana";
echo $nama_depan . " " . $nama_tengah . " " . $nama_belakang . ", " . $x . " ";
?>
<?php 
// perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 > 5);
var_dump(1 < 5);
var_dump(1 <= 5);
var_dump(1 >= 5);
var_dump(1 != 5);
var_dump(1 == "1");

// identitas
// ===, !==
var_dump(1 === "1");
var_dump(1 !== "1");

// logika
// &&, ||, !
$x = 10;
$y = 30;
var_dump($x < 20 && $x % 2 == 0);
var_dump($y < 20 || $y % 2 == 0);
?>