<?php
{
    //Object
    class komputer{
        //property
        public $pemilik = "Adi";
        public $merk = "Brand New J2 Prime";
        public $ukuran = 25;
        

        //Method Behavior
        public function nyala()
        {
            return "Nyala";
        }

        public function mati()
        {
            return "Mati";
        }
    }
    $komputer1 = new komputer();
    echo "Komputer 1 <br>";
    echo "Nama Pemilik = " .$komputer1->pemilik;
    echo "<br>";
    echo "Merk = " . $komputer1->merk;
    echo "<br>";
    echo "Ukuran = "  . $komputer1->ukuran;
    echo "<br>";
    echo "Status = " .$komputer1 -> nyala();
    echo "<br>";

    $komputer2 = new komputer();
    echo "<br>";
    echo "<br>";
    echo "Komputer 2 <br>";
    echo "Nama Pemilik = " .$komputer2->pemilik="Dedi";
    echo "<br>";
    echo "Merk = " . $komputer2->merk="Vivo";
    echo "<br>";
    echo "Ukuran = "  . $komputer2->ukuran=20;
    echo "<br>";
    echo "Status = " .$komputer2 -> mati();
    echo "<br>";

    $komputer3 = new komputer();
    echo "<br>";
    echo "<br>";
    echo "Komputer 3 <br>";
    echo "Nama Pemilik = " .$komputer3->pemilik="Yadi";
    echo "<br>";
    echo "Merk = " . $komputer3->merk="Oppo";
    echo "<br>";
    echo "Ukuran = "  . $komputer3->ukuran=20;
    echo "<br>";
    echo "Status = " .$komputer3 -> mati();
    echo "<br>";

    $komputer4 = new komputer();
    echo "<br>";
    echo "<br>";
    echo "Komputer 4 <br>";
    echo "Nama Pemilik = " .$komputer4->pemilik="Aan";
    echo "<br>";
    echo "Merk = " . $komputer4->merk="Lenovo";
    echo "<br>";
    echo "Ukuran = "  . $komputer4->ukuran=25;
    echo "<br>";
    echo "Status = " .$komputer4 -> nyala();
    echo "<br>";

    $komputer5 = new komputer();
    echo "<br>";
    echo "<br>";
    echo "Komputer 5 <br>";
    echo "Nama Pemilik = " .$komputer5->pemilik="Uus";
    echo "<br>";
    echo "Merk = " . $komputer2->merk="Apple";
    echo "<br>";
    echo "Ukuran = "  . $komputer2->ukuran=30;
    echo "<br>";
    echo "Status = " .$komputer2 -> nyala();
    echo "<br>";
}