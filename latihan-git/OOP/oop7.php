<?php
class komputer{
    private $jenisProcessor = "Intel Core I7";

    public function tampilkanJenisProcessor(){
        return $this->jenisProcessor;
    }
}

class laptop extends komputer{

    public function getProcessor(){
        return $this->jenisProcessor;
    }
}

$komputer = new komputer();
$laptop = new laptop();

echo $komputer->tampilkanjenisProcessor();

echo $laptop->getProcessor();