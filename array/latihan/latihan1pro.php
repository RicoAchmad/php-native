<?php
if(isset($_POST['save']))
{
    $nama = $_POST['nama'];
    $sekolah = $_POST['sekolah'];
    $indo = $_POST['indo'];
    $matematika = $_POST['matematika'];
    $inggris = $_POST['inggris'];
    $ipa = $_POST['ipa'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend>
        <table border=1>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>kelas</th>
                <th>Indonesia</th>
                <th>Matematika</th>
                <th>Inggris</th>
                <th>IPA</th>
                <th>Jumlah</th>
                <th>Rata-Rata</th>
                <th>Keterangan</th>
</tr>

<?php
$no = 1;
for ($i=0; $i < count($nama); $i++){ ?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $nama[$i]; ?></td>
    <td><?php echo $sekolah[$i]; ?></td>
    <td><?php echo $indo[$i]; ?></td>
    <td><?php echo $matematika[$i]; ?></td>
    <td><?php echo $inggris[$i]; ?></td>
    <td><?php echo $ipa[$i]; ?></td>
    <?php $jumlah = $indo[$i] + $inggris[$i] + $matematika[$i] + $ipa[$i];?>
    <td><?php echo $jumlah; ?></td>
    <?php $rata = $jumlah / 4; ?>
    <td><?php echo $rata; ?></td>
    <?php if ($rata > 75){
        $ket = "Diterima" ;
    } else {
        $ket = "Dibuang";
    }
    ?>
    <td><?php echo $ket; ?></td>
</tr>
<?php } ?>
</table>
</fieldset>
</body>
</html>
