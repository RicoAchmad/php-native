<?php

class topUp{
    public $username = "Deden";
    protected $id = "5529525";
    private $password = "Deden123";

public function verifikasi()
{
    $noId = $this->id;
    $pass = $this->password;

    if ($noId == "5529525" && $pass == "Deden123")
    {
        return "TopUp Successfuly";
    } else {
        return "Id / Password Incorrect";
    }
}
    public function get()
    {
        $noId = $this->id;
        $pass = $this->password;
        $c = "Id : " . $noId . " <br> Password = " . $pass;
        return $c;
    }
}

$topup = new topUp();

echo "Username = $topup->username<br>";
echo $topup->get() . "<br>";
echo $topup->verifikasi();
