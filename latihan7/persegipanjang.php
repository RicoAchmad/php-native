<html>
    <head>
    <body>
    <FORM ACTION="" METHOD="POST" NAME="input">
        <h4>Persegi Panjang</h4>
        <table>
            <tr>
                <td>Masukan Panjang : </td>
                <td>:</td>
                <td><input type="number" name="panjang"></td>
</tr>
<tr>
                <td>Masukan lebar : </td>
                <td>:</td>
                <td><input type="number" name="lebar"></td>
</tr>
</table>
<input type = "submit" name="hasil" value="Hasil">

</form>
</body>
</html>
<?php
if (isset($_POST['hasil'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    $luas = $panjang * $lebar;
    echo "Luas Persegi Panjang : $luas<br>";
    $keliling = $panjang * $panjang * $lebar * $lebar;
    echo "Keliling Persegi Panjang: $keliling<br>";
}
?>
