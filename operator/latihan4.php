<?php
$member = "ya";
$belanja = 2000000;

    if ($member == "ya"){
        if($belanja >= 250000) {
            $diskon = 0.1 * $belanja;
    }else if($belanja >= 100000) {
        $diskon = 0.05 * $belanja;
        }
    } else {
        if ($belanja >= 100000) {
            $diskon = 0.025 * $belanja;
        }
    }
    echo "Kartu Member : $member<br>";
    echo "Total Belanja : $belanja <br>";
    echo "Diskon : $diskon<br>";
    echo "Yang harus dibayar : $belanja";
        ?>