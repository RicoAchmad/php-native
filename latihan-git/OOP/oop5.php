<?php

class komputer{
    protected $jenisProcessor = "Intel Core I7";

    protected function tampilkanJenis(){
        return $this->jenisProcessor;
    }
}

class laptop extends komputer{

    public function getProcessor()
    {
        return $this->tampilkanJenis();
    }
}

$laptop = new laptop();
echo $laptop->getProcessor();