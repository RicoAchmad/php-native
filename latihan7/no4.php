<html>
    <head></head>
    <body>
        NO 4.
        <FORM ACTION="p4.php" METHOD="POST" NAME="input">

        Nama : <input type="text" name="nama" required><br><br>

        Jenis Kelamin : <br>
        <input type="radio" name="jk" value="Laki-Laki" required>Laki-Laki
        <input type="radio" name="jk" value="Perempuan" required>Perempuan
        <br><br>

        Agama : <br>
        <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <br><br>
</select>

        <br><br> Golongan : <br>
        <select name="gol">
            <option value="1">Golongan 1</option>
            <option value="2">Golongan 2</option>
            <option value="3">Golongan 3</option>
            <option value="4">Golongan 4</option>
</select>

        <br><br>Jumlah Jam<br> 
        <input type="number" name="jam" value="Jumlah Jam" required>
        <br><br>
        <input type="submit" name="simpan" value="Cek">
        </form>
</body>
</html>