<?php
#inisiasi dan inisialisasi variabel
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 *5);
$e = $d - $c;

#tampil data dengan perintah echo
echo "Variable a: {$a} </br>";
echo "Variable b: {$b} </br>";
echo "Variable c: {$c} </br>";
echo "Variable d: {$d} </br>";
echo "Variable e: {$e} </br>";

#mengetahui tipe data dari variable
var_dump($e);