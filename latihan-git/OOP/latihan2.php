<?php
{
class segitiga{
    public $setengah = 0.5;
    public $alas = 20.0;
    public $tinggi = 30.0;
    public $sisi = 10;
    public $rumusa = "Setengah * Alas * Tinggi";
    public $rumust = "Sisi + Sisi + Sisi";

    public function luasSegitiga($setengah , $alas , $tinggi)
    {
        $luas = $setengah * $alas * $tinggi;
        return $luas;
    }
    public function kelilingSegitiga($sisi)
    {
    $keliling = $sisi + $sisi + $sisi;
    return $keliling;
    }
}

    $luass = new segitiga();
    echo "Setengah = " . $luass->setengah;
    echo "<br>";
    echo "Alas = " . $luass->alas;
    echo "<br>";
    echo "Tinggi = " .$luass->tinggi;
    echo "<br>";
    echo "Rumus Luas Segitiga = " .$luass->rumusa;
    echo "<br>";
    echo "Luas =" . $luass->luasSegitiga(0.5 , 20.0 , 30.0);
    echo "<br>";

    $keliling = new segitiga();
    echo "<br>";
    echo "Sisi = " . $luass->sisi;
    echo "<br>";
    echo "Rumus Keliling Segitiga = " .$luass->rumust;
    echo "<br>";
    echo "Keliling = " . $keliling->kelilingSegitiga(10.0);

}

