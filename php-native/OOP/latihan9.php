<html>
    <FORM action ="" method="POST">
        <H3>GoFood</h3>
        <fieldset>
        Nama Barang :
        <input type ="text" name ="nama" required>
        <br><br>
        Harga :
        <input type ="number" name ="harga" required>
        <br> <br>

        Jumlah Pesanan<br> 
        <input type="number" name="jumlah" required>
        <br><br>
         Sistem Pembayaran 
        <select name="bayar">
            <option value="cash">Cash</option>
            <option value="m-banking">M-Banking</option>
            <option value="Gopay">GoPay</option>
            <option value="pickUp">pickUp</option>
</select>
<br><br>
    <input type="submit" name="simpan" value="Hitung">
            
    </fieldset>
    </FORM>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];

    class data{
        public $nama;
        public $harga;
        public $jumlah;
    }

    class pay extends data{
        public $nama;
        public $harga;
        public $jumlah;
        public $bayar;

        public function yay($bayar , $harga , $jumlah){
            $bayar = $bayar;
            $harga = $harga;
            $jumlah = $jumlah;
            if ($bayar == "cash") {
                echo "Tidak Mendapat Cashback";
            }else if ($bayar == "m-banking") {
                echo "Mendapat Discount  2.5%";
                $discount = 2.5;
                $total = $harga * $jumlah - $discount;
            }else if ($bayar == "cashback") {
                echo "Mendapat cashback 10%";
                $casback = 10;
                $total = $harga * $jumlah % $discount;
            }else if ($bayar = "") {
                echo "Mendapat Discount  1.5%";
                $discount = 1.5;
                $total = $harga * $jumlah - $discount;
            }
            }
    }
}

$yed = new yay();
echo "Nama Barang = " $yed->nama "<br>";