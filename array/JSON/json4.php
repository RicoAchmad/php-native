<?php

$dataMhs = '[
    {"Nama" : "Dedi" , "Domisili" : "UK"},
    {"Nama" : "Dodi" , "Domisili" : "US"},
    {"Nama" : "Didi" , "Domisili" : "UAE"},
    {"Nama" : "Dudu" , "Domisili" : "UE"}
    ]';

    $data = json_decode($dataMhs);
    foreach ($data as $mhs) {
        echo "Nama : " . $mhs ->Nama . "<br>";
        echo "Domisili : " . $mhs ->Domisili;
        echo "<hr>";
    }