<?php
if (isset($_POST['bayar'])) {
    echo "<hr>";
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $mobil = $_POST['mobil'];
    $jenis = $_POST['jenis'];
    $merk = $_POST['merk'];
    $penjamin = $_POST['penjamin'];
    $pinjam = $_POST['pinjam'];
    $kembali = $_POST['kembali'];
    $supir = $_POST['supir'];
    $verif = $_POST['verif'];
}

    echo "Nama : $nama<br>";
    echo "NIK : $nik<br>";
    echo "Jenis Kelamin : $jk<br>";
    echo "Agama : $agama<br>";
    echo "Mobil : $mobil<br>";
    echo "Jenis Mobil : $jenis<br>";
    echo "Merk Mobil : $merk<br>";
    echo "Penjamin : $penjamin<br>";
    echo "Tanggal Pinjam : $pinjam<br>";
    echo "Tanggal Kembali : $kembali<br>";
    echo "Memakai Supir : $supir<br>";
    $denda = 240000;

    $hari = (strtotime($kembali) - strtotime($pinjam)) / 60 / 60 / 24;
    echo "<b><br>Anda Meminjam = $hari hari</b>";
    if ($hari >= 1) {
        $perhari = 150000;
        $harian = $hari * $perhari;
        echo "<br>Harga = $harian";

    }

    $supir = $_POST['supir'];
    echo "<br> Memakai Supir? (+125000/hari) : $supir";
    if ($supir == "Ya") {
        $soper = 125000;
        $supirharian= $soper * $hari;
        $totalharian = $harian + $supirharian;
        echo "<br>Harga = $totalharian";
    } else {
    }
    $tanggalk = new DateTime($kembali);
    $tanggalv = new DateTime($verif);
    $telat = $tanggalk->diff($tanggalv);

    echo "<br>Anda Telat Mengembalikan : $telat->d hari";
    $mendenda = $telat->d * $denda;
    echo "<br>Dikenakan denda sebesar = $mendenda";
    if ($supir == "Ya") {
        $totalharga = $totalharian + $mendenda;
        echo "<br>Total Harga = $totalharga";
    } else {
        $tanpasupir = $harian + $mendenda;
        echo "<br>Total Harga = $tanpasupir";
    }
?>
<html>
    <br><br>
    Pembayaran :
    <br>
    <input type="number" name="bayar">
    <input type="submit" name="bayar" value="Bayar">
</form>
    </html>