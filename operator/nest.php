<?php

for($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "Ini Perulangan ke ($i , $j)<br>";
    }
    echo "<hr>";
}

//while
$j = 0;
while ($i < 10) {
    for ($j = 0; $j < 10; $j++) {
        echo  "Ini perulangan ke ($i , $j)<br>";
    }

    $i++;
}
for($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

for($i = 0; $i < 5; $i++) {
    for ($j = 5; $j > $i; $j--){
        echo "*";
    }
    echo "<br>";
}

?>