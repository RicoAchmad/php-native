<html>
    <head>
    <body>
    <FORM ACTION="" METHOD="POST" NAME="input">
        <h4>Persegi</h4>
        <table>
            <tr>
                <td>Masukan Sisi : </td>
                <td>:</td>
                <td><input type="number" name="sisi"></td>
</tr>
</table>
<input type = "submit" name="hasil" value="Hasil">

</form>
</body>
</html>
<?php
if (isset($_POST['hasil'])) {

    $sisi = $_POST['sisi'];

    $luas = $sisi * $sisi;
    echo "Luas Persegi : $luas<br>";
    $keliling = $sisi * $sisi * $sisi * $sisi;
    echo "Keliling Persegi : $keliling<br>";
}
?>
