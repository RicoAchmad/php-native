<?php
class komputer {

    public function lihat_spec() {
        return "Spec Komputer : Acer , Processor Intel Core I7 ,RAM 4GB";
    }
}

class laptop extends komputer {
    public function lihat_spec() {
        return "Spec Laptop : Asus , Processor Intel Core I5 , RAM 2GB";
    }
    public function lihat_spec_komputer() {
        return parent::lihat_spec();
    }
}

$gadget_baru = new laptop();

echo $gadget_baru->lihat_spec(); 
echo "<br>";
echo $gadget_baru->lihat_spec_komputer();
