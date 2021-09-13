<html>
<head></head>
    <body>
        <h4>Program peminjaman Mobil</h4>
        <fieldset>
        <FORM ACTION="halsel.php" METHOD="POST" NAME="input">
                Masukan Nama <br>
                <input type="text" name="nama" required><br>
                <br>

                Masukan NIK <br>
                <input type="number" name="nik" required> <br>
                <br>

                Jenis Kelamin <br>
                <input type="radio" name="jk" value="Laki-Laki" required>Laki-Laki 
                <input type="radio" name="jk" value="Perempuan" required>Perempuan
                <br> <br>

                Agama <br>
                <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
        </select>
                <br>
                <br>
                Nama Mobil <br>
                <input type="text" name="mobil" required><br>
                <br>

                Jenis Mobil<br>
                <select name="jenis">
                <option value="Sport">Sport</option>
                <option value="Sedan">Sedan</option>
                <option value="Convertible">Convertible</option>
                <option value="SUV">SUV</option>
        </select>
                <br><br>

                Merk Mobil<br>
                <select name="merk">
                <option value="Toyota">Toyota</option>
                <option value="Avanza">Avanza</option>
                <option value="Lambo">Lambo</option>
                <option value="Ferrari">Ferrari</option>
        </select>
        <br>
        <br>
                Tanggal Peminjaman<br>
                <input type="date" name="pinjam" required>
                <br><br>

                Tanggal Kembali<br>
                <input type="date" name="kembali" required>
                <br>

                <br>
                Penjamin<br>
                <select name="penjamin">
                <option value="KTP">KTP</option>
                <option value="SIM">SIM</option>
                <option value="KK">KK</option>
        </select>
                <br><br>
                Memakai Supir<br>
                <input type="radio" name="supir" value="Ya">Ya
                <input type="radio" name="supir" value="Tidak">Tidak
                <br><br>

                <input type="submit" name="bayar" value="Lanjutkan">
                
                <hr>
</fieldset>
</FORM>
</body>
</html>