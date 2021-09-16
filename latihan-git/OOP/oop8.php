<?php
class laptop{
    private $pemilik = "Andi";
    private $merk = "Lenovo";

    public function __construct(){
        echo "Ini Berasal dari Construct Laptop";
    }

    public function hidupkan_laptop(){
        return "Hidupkan Laptop $this->merk punya $this->pemilik";
    }
    
    public function __destruct(){
        echo "Ini Berasal dari Destruck Laptop";
    }
}

$laptop_andi = new laptop();
echo "<br>";
echo $laptop_andi->hidupkan_laptop();
echo "<br>";

//hapus objek
unset($laptop_andi);
echo "<br>";
echo "Objek Telah Dihancurkan";