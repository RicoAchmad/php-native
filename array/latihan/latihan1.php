<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Data Array</title>
</head>
<body>
    <fieldset>
        <legend>Input Array</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Masukan Jumlah Data</th>
                    <td>: <input type ="number" name="jumlah"></td>
</tr>
<tr>
    <th>
</th>
<td>
    <button type="submit" name="simpan">Simpan</button>
    <button type="reset">Reset</button>
</td>
</tr>
</table>
</form>
</fieldset>
<?php
if(isset($_POST['simpan']))
{
    $row = $_POST['jumlah'];

?>
<fieldset>
    <legend>Input data Siswa</legend>
    <table > 
        <form action="latihan1pro.php" method="post">
            <?php

            for($i = 1; $i <= $row; $i++)
            {
            ?>
                <tr>
                    <tr>
                    <th colspan="2">Data ke-<?php echo $i; ?></th>
                    <td>Nama</td>
                    <td><input type="text" name="nama[]" required></td>
            </tr>
            <tr>
                    <tr>
                    <th colspan="2"></th>
                    <td>Asal Sekolah</td>
                    <td><input type="text" name="sekolah[]" required></td>
            </tr>
            <tr>
                    <tr>
                    <th colspan="2"></th>
                    <td>Nilai Bahasa Indonesia</td>
                    <td><input type="number" name="indo[]" Max="100" Min="0" requireq></td>
            </tr>
            <tr>
                    <tr>
                    <th colspan="2"></th>
                    <td>Nilai Matematika</td>
                    <td><input type="number" name="matematika[]" Max="100" Min="0" required></td>
            </tr>
            <tr>
                    <tr>
                    <th colspan="2"></th>
                    <td>Nilai Bahsa Inggris</td>
                    <td><input type="number" name="inggris[]" Max="100" Min="0" required></td>
            </tr>
            <tr>
                    <tr>
                    <th colspan="2"></th>
                    <td>Nilai IPA</td>
                    <td><input type="number" name="ipa[]" Max="100" Min="0" required></td>
            </tr>
            <?php
            }
            ?>
            <tr>
                <th></th>
             
                <td><button type="submit" name="save">Simpan</button></td>
        </tr>
        
        </form>
        </table>
        </fieldset>
        <?php
}
        ?>
        </body>
        </html>
<?php
