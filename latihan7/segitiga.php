<html>
    <head>
    <body>
    <FORM ACTION="" METHOD="POST" NAME="input">
        <h4>Segitiga</h4>
        <table>
            <tr>
                <td>Alas : </td>
                <td>:</td>
                <td><input type="number" name="alas"></td>
</tr>
<tr>
                <td>Tinggi : </td>
                <td>:</td>
                <td><input type="number" name="tinggi"></td>
</tr>
</table>
<input type = "submit" name="hasil" value="Hasil">

</form>
</body>
</html>
<?php
if (isset($_POST['hasil'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    $luas = $alas * $tinggi / 2;
    echo "Luas segitiga : $luas<br>";
    $keliling = $alas * $alas * $alas;
    echo "Keliling Segitiga : $keliling<br>";
}
?>
