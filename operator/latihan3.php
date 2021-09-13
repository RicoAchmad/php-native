<?php
    $nilai = 85;
    $grade = "";
    if ($nilai >= 90) {
        $grade = "A";
    }else if ($nilai >= 80) {
        $grade = "B";
    }else if ($nilai >= 70) {
        $grade = "C";
    }else if ($nilai >= 60) {
        $grade = "D";
    }else{
        $grade = "E";
    }
    

    switch("$grade") {
        case 'A':$ket = "Pertahankan";
        break;
        case 'B':$ket = "Harus lebih baik lagi";
        break;
        case 'C':$ket = "Perbanyak Belajar";
        break;
        case 'D':$ket = "Jangan keseringan main";
        break;
        case 'E':$ket = "Kebanyakan Bolos";
        break;
        default : $ket = "Format tidak sesuai";   
    }

    echo "Nilai : $nilai<br>";
    echo "Grade : $grade <br>";
    echo "Keterangan : $ket ";
?>