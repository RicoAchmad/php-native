<html>
    <FORM action ="" method="POST">
        <fieldset>
    Masukan Bilangan : <br><br>
        Bilangan 1 : 
        <input type ="number" name ="bil1" value="Masukan Bilangan">
        <br><br>
        Bilangan 2 : 
        <input type ="number" name ="bil2" value="Masukan Bilangan">
        <br><br>
        <input type="submit" name="Pilih" value="Hitung">
</fieldset>
        </FORM>
</body>
</html>
<?php
if (isset($_POST['Pilih'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    class hitung{
        public $bil1;
        public $bil2;
    
        public function __construct($a , $b){
            $this->bil1 = $a;
            $this->bil2 = $b;
        }
        public function jumlah()
        {
            return ($this->bil1 + $this->bil2);
        }
        public function kurang()
        {
            return ($this->bil1 - $this->bil2);
        }
        public function kali()
        {
            return ($this->bil1 * $this->bil2);
        }
        public function bagi()
        {
            return ($this->bil1 / $this->bil2);
        }
        public function modulus()
        {
            return ($this->bil1 % $this->bil2);
        }
    }
}
$penjumlahan = new hitung($bil1 , $bil2);
echo "$bil1 + $bil2 : " . $penjumlahan->jumlah();
echo "<hr>";

$pengurangan = new hitung($bil1 , $bil2);
echo "$bil1 - $bil2 : " . $pengurangan->kurang();
echo "<hr>";

$perkalian = new hitung($bil1 , $bil2);
echo "$bil1 * $bil2 : " . $perkalian->kali();
echo "<hr>";

$pembagian = new hitung($bil1 , $bil2);
echo "$bil1 / $bil2 : " . $pembagian->bagi();
echo "<hr>";

$hasil = new hitung($bil1 , $bil2);
echo "$bil1 % $bil2 : " . $hasil->modulus();
echo "<br>";