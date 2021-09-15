<?php
class laptop{
    public $procie = 'Core I7';
    public $VGA = 'GTX 1050';
    
    public function gaming(){
        return "Mush Mush";
    }
}

class ROG extends laptop{
    public $procie = 'Core I9';
} 

$Asus = new ROG();
echo $Asus->procie;

if (property_exists($Asus , "VGA")) {
    echo "<br> Laptop Ini Mempunyai VGA<br>";
}
echo $Asus->gaming();