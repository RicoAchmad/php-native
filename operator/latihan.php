<?php

// 1
echo "No 3<br><br>";
$i = 2;
do{
    echo "$i ";
    $i*=2;
}while ($i <= 100);
echo "<br><br><hr>";


//No 2
echo "No 2 <br><br>";
$j = 625;
do{
    echo "$j ";
    $j/=5;
}while ($j >= 5);
echo "<br><br><hr>";

// 3
echo "No 3 <br><br>";
$bill = [18, 45, 29, 61, 47, 32];

for ($m= 0; $m < count($bill); $m++) {
    $result[$m] = $bill[$m] % 3;
    echo "$bill[$m] %3 = $result[$m]";
    echo "<hr>";
}
//4
echo "No 4 <br><br>";
for($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "No 4 B <br><br>";
for($i = 0; $i < 5; $i++) {
    for ($j = 5; $j > $i; $j--){
        echo "*";
    }
    echo "<br>";
}
?>