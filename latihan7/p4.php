<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    echo "Nama : $nama";

    $jk = $_POST['jk'];
    echo "<br>Jenis Kelamin : $jk";

    $agama = $_POST['agama'];
    echo "<br> Golongan : $agama";

    $jam = $_POST['jam'];
        echo "<br>Jam Kerja = $jam";
        echo "<br>";

    $gol = $_POST['gol'];
    if ($gol == "1") {
            $gajipokok = 1500000;
            $tunjangan = 150000;
        }else if ($gol == "2") {
            $gajipokok = 2000000;
            $tunjangan = 200000;
        }else if ($gol == "3") {
            $gajipokok = 2500000;
            $tunjangan = 250000;
        }else if ($gol = "4"){
            $gajipokok = 3000000;
            $tunjangan = 300000;
        }

        if ($gajipokok > 173) {
            $jamsisa= $jam - 173;
            $lembur = 20000 * $jamsisa;
        } else {
            $lembur = 0;
        }
        echo "<br><br>";
        echo "Gaji Pokok =  $gajipokok<br>";
        echo "Gaji Lembur = $lembur<br>";
        $pajakpokok = ($gajipokok * 5) / 100;
        echo "Pajak Gaji Pokok = $pajakpokok<br>";
        $pajaklembur = ($lembur * 5) / 100;
        echo "Pajak Gaji Lembur = $pajaklembur<br>";
        $tunjangan = 
        $totalpajak = $pajakpokok + $pajaklembur;
        $totalgaji = $pajakpokok + $pajaklembur;
        $total = $totalgaji + $totalpajak;
        echo "Gaji Diterima = $total<br>";
        echo "dan Tunjangan Sebesar : $tunjangan";
}
?>