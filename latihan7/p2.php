<?php
if (isset($_POST['Pilih'])) {
    $bangunruang = $_POST['bangunruang'];
    if ($bangunruang == "Segitiga") {
        header("location: segitiga.php");
    }else if ($bangunruang == "Lingkaran") {
        header("location: lingkaran.php");
    }else if ($bangunruang == "Persegi") {
        header("location: persegi.php");
    }else if ($bangunruang == "Persegi Panjang") {
        header("location: persegipanjang.php");
}    
}
?>