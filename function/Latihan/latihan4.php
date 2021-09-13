<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
</head>
<body>  
    <form action="" method="POST">
        <fieldset>
        Masukan Bilangan : <br>
        <input type="number" name="bilangan" required>
        <hr>
        Masukan Pangkat : <br>
        <input type="number" name="pangkat" required>
        <hr>
        
        </fieldset>
        <br>
        <button type="submit" name="simpan">Hitung</button>    
        <button type="reset">Reset</button>
        <hr>

        <?php
        if(isset($_POST['simpan'])){
        $bilangan = $_POST['bilangan'];
        $pangkat = $_POST['pangkat'];

        function pangkat($bilangan , $pangkat){
            if ($pangkat > 1) {
                return $bilangan * pangkat($bilangan , $pangkat - 1);
            } else {
                return $bilangan;
            }
        }

        function pangkatnya($bilangan , $pangkat){
            for ($i = 1; $i <= $pangkat; $i++) {
                echo $bilangan;
                if ($i < $pangkat) {
                    echo " X ";
                }
            }
        }
        echo "<br>";
        echo pangkatnya($bilangan , $pangkat);
        $hasil = pangkat($bilangan , $pangkat);
        echo "=" . $hasil;
    }

    
    