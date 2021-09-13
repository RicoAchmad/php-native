<?php
$a = 1;
$i = 2;
$b = $a + $a;
$c = $a - $a;
$d = $a * $a;
$e = $a / $a;
if (isset($_POST['Pilih'])) {
    $bil = $_POST['bilangan1'];
    echo "$a + $a = $b<br>";
    echo "$a - $a = $c<br>";
    echo "$a * $a = $d<br>";
    echo "$a / $a = $e<br>";
} else {
    $bil = $_POST['bilangan2'];
}
?>