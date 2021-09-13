<?php
$books = [
    "Panduan belajar untuk pemula",
    "Membangun aplikasi web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat chat bot dengan PHP",
];

echo "<h4>Judul Buku PHP : </h4>";
echo "<ul>";
foreach($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ul>";