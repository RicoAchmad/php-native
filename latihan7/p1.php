<?php
if (isset($_POST['Pilih'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $a = $bil1 + $bil2;
    $b = $bil1 - $bil2;
    $c = $bil1 * $bil2;
    $d = $bil1 / $bil2;

echo "$bil1 + $bil2 = $a<br>";
echo "$bil1 - $bil2 = $b<br>";
echo "$bil1 * $bil2 = $c<br>";
echo "$bil1 / $bil2 = $d<br>";
}