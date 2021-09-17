<?php
class komputer {
    public $merk = "Acer";
    public function lihat_spec() {
        return "Spec Komputer : Acer , Processor Intel Core I7 ,RAM 4GB";
    }
}

class laptop extends komputer {
    public $merk = "Asus";

    public function lihat_spec() {
        return "Spec Laptop : Asus , Processor Intel Core I5 , RAM 2GB";
    }
    public function lihat_spec_komputer() {
        return parent::lihat_spec();
    }
    public function lihat_merk(){
        return parent::$merk;
}
}

$gadget_baru = new laptop();

echo $gadget_baru->lihat_spec(); 
echo "<br>";
echo $gadget_baru->lihat_spec_komputer();
echo "<br>";
echo $gadget_baru->lihat_merk();