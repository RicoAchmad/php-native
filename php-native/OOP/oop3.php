<?php

class kucing{
    public $warna;

    public function __construct($warna){
        $this->warna = $warna;
    }

    public function bersuara(){
        return "Miaw , Miaw ,Miaw"; 
    }

    public function berburu(){
        return "Berburu Ikan";
    }
}

$kucing1= new kucing("Hitam");
echo "Warna Kucing 1: " . $kucing1->warna . "<br>";

$kucing2= new kucing("Oren");
echo "Warna Kucing 2: " . $kucing2->warna . "<br>";