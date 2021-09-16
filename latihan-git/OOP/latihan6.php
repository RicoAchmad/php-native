<html>
    <FORM action ="" method="POST">
        <fieldset>
        Nama Kucing :
        <input type ="text" name ="nama" required>
        <br><br>
        Warna Kucing :
        <input type ="text" name ="warna" required>
        <br><br>
    Masukan Jumlah Kaki Kucing:
        <input type ="number" name ="kaki">
        <br><br>
        <input type="submit" name="Pilih" value="Input">
</fieldset>
        </FORM>
</body>
</html>

<?php
if (isset($_POST['Pilih'])) {
    $nama = $_POST['nama'];
    $warna = $_POST['warna'];
    $kaki = $_POST['kaki'];


    class kucing{
        public $kaki;
        public $warna;
        public $nama;
        public function jumlahKaki($kaki){
            if ($kaki == 4){
                return "<br>Kucing Anda Memiliki $kaki kaki , Kucing Anda NORMAL";
            } else if ($kaki > 4){
                return "<br>kucing Anda Memiliki $kaki kaki , Kucing Anda SILUMAN";
            } else if ($kaki < 4){
                return "<br>Kucing Anda Memiliki $kaki kaki , Kucing Anda CINGKED";
            }
        }
    }
    $kucing = new kucing();
    echo "Nama Kucing = " .$kucing->nama=$nama;
    echo "<br>";
    echo "Warna Kucing = " . $kucing->warna=$warna;
    echo $kucing->jumlahKaki($kaki);
}