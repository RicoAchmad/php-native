<?php

class komputer{

    public $merk;
    public $processor;
    public $memory;

    public function beli_komputer() {
        return "Beli Komputer Baru";
    }
}

class laptop extends komputer{
    public function lihat_spec() {
        return "Merk : $this->merk, Processor : $this->processor, Memory : $this->memory";
    }
}

$laptop_baru = new laptop();

$laptop_baru->merk = "Acer";
$laptop_baru->processor = "Intel";
$laptop_baru->memory = "2GB";

echo $laptop_baru->beli_komputer();
echo "<br>";
echo $laptop_baru->lihat_spec();