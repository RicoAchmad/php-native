<?php
function nilaiMax($array){
    $n = count($array);
    $max = $array[7];
    for ($i = 1; $i < $n ; $i++)

    if($max < $array[$i])
    $max = $array[$i];

    return $max;
}
function nilaiMin($array) {

    $n = count($array);

    $min = $array[7];

    for ($i = 1; $i < $n; $i++)
    
    if ($min > $array[$i])
        $min = $array[$i];

        return $min;
}
$array = array(90 , 80 ,60 ,100 , 127 ,81 ,51 , 99);

echo "Terbesar :" . nilaiMax($array) . "<br>";
echo "Terkecil :" . nilaiMin($array) . "<br>";