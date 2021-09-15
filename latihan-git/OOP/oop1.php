<?php
{
    //Object
    class kucing{
        //property
        public $warna = "Oren";
        public $jumlahKaki = 4;
        public $jenisBulu = "Lurus";
        public $makananFavorit = "Ikan";

        //Method Behavior
        public function bersuara()
        {
            return "Miaw , Miaw";
        }

        public function berburu()
        {
            return "Ikan";
        }
    }

    //Incase you need
    $kucing1 = new kucing();
    echo "Warna Kucing = " . $kucing1 -> warna;
    echo "<br>";
    echo "Suara = " . $kucing1 ->bersuara();
}