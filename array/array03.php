<?php
$arrwarna = array("Blue","Black","Red","Yellow","Green");

echo "Menampilkan isis Array dengan for : <br>";
for ($i=0; $i<count($arrwarna); $i++) {
    echo "Do you like <font color=$arrwarna[$i]>". $arrwarna[$i]."</font> ? <br>";
}

echo "<br>Menampilkan Isi array dengan Foreach : <br>";
foreach ($arrwarna as $warna) {
    echo "Do You like <font color=$warna>". $warna . "</font> ? <br>";
}
?>