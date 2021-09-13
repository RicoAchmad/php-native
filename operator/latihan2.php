<?php
    $nAkademi = 85;
    $nAtletik = 83;

    echo "Nilai Akademik : $nAkademi <br>";
    echo "Nilai Atletik : $nAtletik <br>";
    $kelulusan  = ($nAkademi >= 85 && $nAtletik >= 83) ? "Lulus" : "Tidak Lulus";
    echo "Dinyatakan :  $kelulusan";
?>