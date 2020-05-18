<?php
// untuk mencetak tulisan ke layar
echo 'Hello World';
echo '<hr>';

echo (1 + 2) * 3 - 4;
echo '<hr>';

// Variabel
// Tempat untuk menyimpan nilai, bisa angka maupun tulisan
$nama = 'Busro';
$email = 'busro.trisno@gmail.com';
$nama = 'trisno';
echo $nama;
echo '<hr>';


$x = 10;
$y = 20;
$x = $y;
echo $y;
echo '<hr>';

// OPERATOR
// Operator Aritmatika / Matematika
//  +, -, *, /(pembagian), %(sisa bagi)
echo 30 % 4;
echo '<hr>';


// Operator Assignment / Penugasan
// =, +=, -=, *=, /=, %=, .=
$x = 10;
$x *=20;
echo $x;
echo '<hr>';


// Operator Increment / Decrement
// ++, --
$x = 5;
$x++;
$x++;
echo $x;
echo '<hr>';


// Operator String / Concat / Penggabung String
$namadepan = 'Busro';
$namabelakang = 'Trisno';
echo $namadepan . $namabelakang;
echo '<hr>';

$nama = 'Busro';
$nama .= ' ';
$nama .= 'Trisno';
echo $nama;
echo '<hr>';


// Standar Output
// echo, print
// '', ""
// escape character
// \
$salam = "Assalamu'alaikum";
$script = 'A: "Assalamu\'alaikum"';
$script = "A: \"Assalamu'alaikum\"";
echo $script;
echo '<hr>';












?>