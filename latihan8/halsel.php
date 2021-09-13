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
}

?>
<html>
<head></head>
<body>
    <form action ="hallanjut.php" method="POST">
        <table>
            <input type="hidden" name="nama" value=<?php echo "$nama";?>>
            <input type="hidden" name="nik" value=<?php echo "$nik";?>>
            <input type="hidden" name="jk" value=<?php echo "$jk";?>>
            <input type="hidden" name="agama" value=<?php echo "$agama";?>>
            <input type="hidden" name="mobil" value=<?php echo "$mobil";?>>
            <input type="hidden" name="jenis" value=<?php echo "$jenis";?>>
            <input type="hidden" name="merk" value=<?php echo "$merk";?>>
            <input type="hidden" name="penjamin" value=<?php echo "$penjamin";?>>
            <input type="hidden" name="pinjam" value=<?php echo "$pinjam";?>>
            <input type="hidden" name="kembali" value=<?php echo "$kembali";?>>
            <input type="hidden" name="supir" value=<?php echo "$supir";?>>
            <tr>
                <td>Tanggal Mengembalikan : </td>
                    <td><input type="date" name="verif" value="Tanggal" required>
                    </tr>
                    <td></td>
                    <td>
                        <tr>
                    <input type="submit" name='bayar' value="Lanjut">
</tr>
</td>
    </form>
</body>
</html>
