<html>
    <head>
    <body>
    <FORM ACTION="" METHOD="POST" NAME="input">
        <h4>Lingkaran</h4>
        <table>
            <tr>
                <td>Jari-Jari : </td>
                <td>:</td>
                <td><input type="number" name="jari"></td>
</tr>

</table>
<input type = "submit" name="hasil" value="Hasil">

</form>
</body>
</html>
<?php
if (isset($_POST['hasil'])) {
    $jari = $_POST['jari'];

    $luas = 3.14 * $jari * $jari;
    echo "Luas Lingkaran: $luas<br>";
    $keliling = 2 * 3.14 * $jari;
    echo "Keliling Lingkaran : $keliling<br>";
}
?>
