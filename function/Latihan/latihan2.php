<html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
</head>
<body>
        <form action="" method="POST">
        <table>
        <tr>
        <th></th>
        Masukan Jari-Jari
        <input type ="number" name="jari">
</tr>
<tr>
<th>
</th>
<td>
    <button type="submit" name="simpan">Masukan</button>
    <button type="reset">Reset</button>
</td>
</tr>
</form>
</html>

<?php
if(isset($_POST['simpan'])){
    $a = $_POST['jari'];

function luas($jari , $phi = 3.14)
{
    $luas = $phi * ($jari * $jari);
    return $luas;
}

function keliling($jari , $phi = 3.14)
{
    $keliling = 2 * $phi * $jari;
    return $keliling;
}
}?>
<br>
Jari-Jari = <?php echo $a;?> <br>
Luas Lingkaran = <?php echo luas($a); ?> <br>
Keliling Lingkaran = <?php echo keliling($a); ?> <br>