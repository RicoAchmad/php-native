
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
</head>
<body>
    <fieldset>
        <form action="" method="POST">
        Nama : <br>
        <input type="text" name="nama" required><br><br>

        Jenis Kelamin : <br>
        <input type="radio" name="jk" value="Laki-Laki" required>Laki-Laki
        <input type="radio" name="jk" value="Perempuan" required>Perempuan
        <br><br>

        Tanggal Lahir : <br>
        <input type="date" name="tanggal">
        <br>

        <br>Agama : <br>
        <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
        </select>
        <br>

        <br> Alamat : <br>
        <input type ="textarea" name="alamat">
        <br> 

        <br> Hobi : <br>
        <input type = "checkbox" name="hobi[]" value="Berenang" >Berenang
        <input type = "checkbox" name="hobi[]" value="Membaca" >Membaca
        <br>
        <input type = "checkbox" name="hobi[]" value="Belajar" >Belajar
        <input type = "checkbox" name="hobi[]" value="Menari" >Menari
        <br>
        <input type = "checkbox" name="hobi[]" value="Menonton" >Menonton
        <input type = "checkbox" name="hobi[]" value="Main Game" >Main Game
</fieldset>
<br>
<button type="submit" name="simpan">Input</button>    
<button type="reset">Reset</button>
</form>


<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tanggal = $_POST['tanggal'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];

function biodata($nama = "" , $jk = "" , $tanggal = "", $agama = "", $alamat = "" , $hobi = "")
{
    $hasil = "<hr>";            
    $hasil .= "<br>";
    $hasil .= "Nama = " . $nama . "<br>";
    $hasil .= "Jenis Kelamin = " . $jk . "<br>";
    $hasil .= "Tanggal Lahir = " . $tanggal . "<br>";
    $hasil .= "Agama = " . $agama . "<br>";
    $hasil .= "Alamat = " . $alamat . "<br>";
    $hasil .= "Hobi = " . implode(", " , $hobi);
    return $hasil;
}
    echo biodata($nama , $jk , $tanggal , $agama , $alamat , $hobi);
}
?>
<br>
<br>
