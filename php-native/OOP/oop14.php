<?php

class komputer {
    public function __construct() {
        echo "Construct dari class Komputer <br>";
    }

    public function __destruct() {
        echo "Destruct dari class Komputer <br>";
    }
}

class laptop extends komputer {
    public function __construct() {
        parent::__construct();
        echo "Construct dari class Laptop <br>";
    }

    public function __destruct() {
        echo "Destruct dari class  Laptop <br>";
        parent::__destruct(); 
    }
}
              
    class chromebook extends laptop {
        public function __construct() {
            parent::__construct();
            echo "Construct dari class Chromebook <br>";
        }
    
        public function __destruct() {
            echo "Destruct dari class Chromebook <br>";
            parent::__destruct();
        }
    }
    $gadget_baru = new chromebook();
    echo "Belajar OOP Php <br>";
