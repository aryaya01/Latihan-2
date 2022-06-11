<?php

$nilaimatematika = 5.1;
$nilaiIPA = 6.7;
$nilaibindo = 9.3;

#hitung nilai rata-rata
$ratarata = ($nilaimatematika + $nilaiIPA + $nilaibindo) /3;

#tampil data

echo "matematika: {$nilaimatematika} </br>";
echo "IPA: {$nilaiIPA} </br>";
echo "Bahasa Indonesia: {$nilaibindo} </br>";
echo "Rata-rata: {$ratarata} </br>";

#lihat tipe data dari variabel $ratarata
var_dump($ratarata);