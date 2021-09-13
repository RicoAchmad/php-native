<?php

$uangAwal = 50000;
$hargaMinum = 15000;
$belisosis = 25000;
$sedekah = 10;
$nemuUang = 0.5;


echo "Uang Ucup = $uangAwal<hr>";

$uangMinum = $uangAwal - $hargaMinum;
echo "Jajan Minum $hargaMinum<br>";
echo "Sisa uang ucup jajan Minum = $uangMinum<hr>";

$uangMakan = $uangMinum - $belisosis;
echo "Jajan Sosis Bakar $belisosis<br>";
echo "Sisa Uang Ucup jajan sosis bakar + minum = $uangMakan<hr>";

$uangSedekah = $uangMakan / $sedekah;
$sisaSedekah = $uangMakan - $uangSedekah;
echo "Sedekah ke musafir 10% dari $uangMakan yaitu sebesar $uangSedekah<br>";
echo "Sisa Uang Ucup = $sisaSedekah<hr>";

$nemu = $sisaSedekah * $nemuUang;
echo "nemu uang dijalan sebesar 50% dari sisa uang ucup $sisaSedekah yaitu $nemu <br>";
echo "sisa Uang ucup sekarang = $nemu + $sisaSedekah<hr>";

$total = $nemu + $sisaSedekah;
echo "total uang ucup adalah $total";


?>