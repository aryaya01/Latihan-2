<?php

$namadepan = "Ibnu"; #pakai tanda petik dua
$namabelakang = 'Jakaria'; #pakai tanda petik satu

#menggabungkan dua variabel dengan tanda
#petik dua
$namalengkap = "{$namadepan} {$namabelakang}";

#anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namalengkap2 = $namadepan.' '.$namabelakang;

#tampilkan data
#kita bisa memasukan variabel lain jika menggunakan tanda petik dua
echo "Nama Depan: {$namadepan} </br>";
#ada pun jika pakai tanda petik satu, kita tidak bisa memasukan variabel
#didalam string akan tetapi menggabungkannya dengan operator titik (.)
echo 'Nama Belakang: ' . $namabelakang . '</br>';

echo $namalengkap;