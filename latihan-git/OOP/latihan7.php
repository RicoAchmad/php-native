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
        <input type ="number" name ="nilai" min="1" max="100" required>
        <br><br>
        Dosen :
        <input type ="text" name ="dosen" required>
        <br><br>
        Matakuliah :
        <input type ="text" name ="pel" required>
        <br><br>
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
    $matkul = $_POST['pel'];

        class mahasiswa{
        public $nama;
        public $nim;
        public $nilai;
        }

        class mataKuliah extends mahasiswa{
            public $dosen;
            public $matkul;
            public $nilai;

            public function nilai($nilai){
                if ($nilai > 84) {
                    return "Grade A (Lulus)";
                } else if($nilai > 75) {
                    return "Grade B (Lulus)";
                } else if ($nilai > 65) {
                    return "Grade C (Perbaikan)";
                } else {
                    return "Grade D (Tidak Lulus)";
            }
        }
    }

    $output = new mataKuliah($nama , $nim , $nilai , $dosen , $matkul , $nilai);
    echo "Nama = ". $output->nama = $nama . "<br>";
    echo "NIM = ". $output->nim = $nim. "<br>";
    echo "Nilai = " .$output->nilai = $nilai. "<br>";
    echo "Dosen = " .$output->dosen = $dosen. "<br>";
    echo "Mata Kuliah =" .$output->matkul = $matkul. "<br>";
    echo "Status = " .$output->nilai($nilai);
}