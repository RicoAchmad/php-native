<?php
    $tahun = date('Y');
    $kabisat = $tahun % 4 == 0;
    $jawab = $kabisat ? "iya" : "Bukan Tahun Kabisat";
    echo $tahun ,"<br>";
    echo "Tahun Kabisat : " , $jawab;
    echo "<hr>";
?>