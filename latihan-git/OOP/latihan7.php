<html>
    <FORM action ="" method="POST">
        <fieldset>
        Nama :
        <input type ="text" name ="nama" required>
        <br><br>
        NIM :
        <input type ="number" name ="nim" required>
        <br><br>
        Masukan Nilai : 
        <input type ="number" name ="nilai">
        <br><br>
        Dosen :
        <input type ="text" name ="dosen" required>
        <br><br>
        Matakuliah :
        <input type ="text" name ="pel" required>
        <br><br>
        Status :
        <input type ="text" name ="stat" required>
        <br><br>
        <input type="submit" name="Pilih" value="Lanjut">
</fieldset>
        </FORM>
</body>
</html>

<?php
if (isset($_POST['Pilih'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];
    $dosen = $_POST['dosen'];
    $pelajaran = $_POST['pel'];
    $stat = $_POST['stat'];

        class mahasiswa{
        public $a=$nama;
        public $b=$nim;
        public $c=$nilai;
        public $d=$dosen;
        public $e=$pelajaran;
        public $f=$stat;
    }
}
    public class mataKuliah{

    }
