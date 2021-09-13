<?php
function tampilangka(int $jumlah, int $index = 1) {
    echo "Ini Perulangan Ke-{$index} <br>";

if ($index < $jumlah) {
    tampilangka($jumlah, $index + 1);

    }
}
tampilangka(20);