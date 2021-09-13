<html>
    <head></head>
    <body>
        NO 3.
        <form action method ="POST">
            <h4>Masukan Angka 1-5 :<h4><input type="number" name="num" >
            <input type="submit" name="hitung" value="hitung">
            </form>
</body>
</html>

<?php
echo "<br>";
if (isset($_POST['hitung'])) {
    $angka = $_POST['num'];
    if ($angka <= 5) {
        for ($a = 1; $a <= $angka; $a++) {
            for ($b = $angka; $b >= $a; $b-=1) {
                print("&nbsp");
            }
            for ($c = 1; $c <= $a; $c++) {
                echo "*";
            }
            echo "<br>";
        }

        for ($a = 1; $a <= $angka; $a++) {
            for ($b = 1; $b <= $a; $b++) {
                echo " ";
            }
            for ($c = $angka; $c >= $a; $c--) {
            }
            echo "*";
        }
        echo "<br>";
    }else{
        echo "Tidak Ada";
    }
}
?>