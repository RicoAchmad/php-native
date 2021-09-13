<?php

$artikel = [
    [
    "Judul" => "Belajar PHP & MySQL untuk pemula",
    "Penulis" => "Petanikode"
],
[
    "Judul" => "Tutorial PHP dari NOL Hingga Mahir",
    "Penulis" => "PetaniKode"
],
[
    "Judul" => "Membuat Aplikasi web dengan PHP",
    "Penulis" => "PetaniKode"
]
];

foreach($artikel as $post){
    echo "<h4>". $post['Judul']. "</h4>";
    echo "<p>". $post['Penulis']. "</p>";
    echo "<hr>";
}