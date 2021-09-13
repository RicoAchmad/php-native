<?php
if (isset($_POST['bayar'])) {
    echo "<hr>";
    $nama = $_POST['nama'];
    echo "Nama : $nama";

    $nik = $_POST['nik'];
    echo "<br>NIK : $nik";

    $jk = $_POST['jk'];
    echo "<br>Jenis Kelamin : $jk";

    $agama = $_POST['agama'];
    echo "<br> Agama : $agama";

    $mobil = $_POST['mobil'];
    echo "<br> Nama Mobil : $mobil";

    $jenis = $_POST['jenis'];
    echo "<br> Jenis Mobil : $jenis";

    $merk = $_POST['merk'];
    echo "<br> Merk Mobil : $merk";

    $penjamin = $_POST['penjamin'];
    echo "<br> Penjamin : $penjamin";
    
    echo "<hr>";
    $pinjam = $_POST['pinjam'];
    echo "<br>Tanggal Peminjaman : $pinjam";

    $kembali = $_POST['kembali'];
    echo "<br> Tanggal Kembali : $kembali";

    

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
    echo "<hr>";
}
    ?>

    <html>
    <FORM ACTION="hal1.php" METHOD="GET" NAME="input">
    Tanggal telat<br>
    <input type="date" name="telat" required>
    <input type="submit" name="bayar" value="Lanjutkan">
    </html>
<?php
if (isset($_POST['bayar'])) {
    echo "<br><br>Anda mengembalikan pada = ";
}
    ?>