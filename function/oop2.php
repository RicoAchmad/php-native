<?php

class ucapan{
    public function siang(){
        return "Selamat Siang";
    }

    public function sore(){
        return "Selamat Sore";
    }
    public function_construct(){
        echo "Selamat pagi";
    }
}

  $selamat = new ucapan();
  echo $selamat->siang() >"<br>";
  echo $selamat->sore()