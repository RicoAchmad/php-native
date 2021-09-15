<?php
{
class persegi{
    public $panjang = 5;
    public $lebar = 15;
    public $dua = 2;
    public $rumusa = "P * L";
    public $rumust = "2 * P * L";

    public function luasPersegi($panjang , $lebar)
    {
        $luas = $panjang * $lebar;
        return $luas;
    }
    public function kelilingPersegi($dua , $panjang , $lebar)
    {
        $keliling = $dua * $panjang * $lebar;
        return $keliling;
    }
}

    $luass = new persegi();
    echo "<hr>";
    echo "Panjang = " . $luass->panjang;
    echo "<br>";
    echo "Lebar = " .$luass->lebar;
    echo "<br>";
    echo "Rumus Luas Persegi = " .$luass->rumusa;
    echo "<br>";
    echo "Luas =" . $luass->luasPersegi(5 , 15);
    echo "<br>";

    $keliling = new persegi();
    echo "<hr>";
    echo "<br>";
    echo "Dua = " . $luass->dua;
    echo "<br>";
    echo "Panjang = " . $luass->panjang;
    echo "<br>";
    echo "Lebar = " . $luass->lebar;
    echo "<br>";
    echo "Rumus Keliling Persegi = " .$luass->rumust;
    echo "<br>";
    echo "Keliling = " . $keliling->kelilingPersegi(2 , 5 , 15);
    echo "<hr>";
}