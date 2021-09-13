<?php

function hitungUmur($thn_lahir , $thn_skrg )
{
    $umur = $thn_skrg - $thn_lahir;
    return $umur;
}

function perkenalan($nama , $salam = "Assalamualaikum")
{
    echo $salam . " ,";
    echo "Perkenalkan nama saya" . $nama . "<br>";
    echo "Saya Berusia " . hitungUmur(2004, 2021) . " Tahun";
    echo "Senang Berkenalan Dengan Anda <br>";
}
    perkenalan("Rico Achmad");