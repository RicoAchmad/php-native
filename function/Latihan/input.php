function luas($jari , $phi = 3.14)
{
    $luas = $phi * ($jari * $jari);
    return $luas;
}

function keliling($jari , $phi = 3.14)
{
    $keliling = 2 * $phi * $jari;
    return $keliling;
}
function perhitungan()
{
    echo "Luas Lingkaran Adalah = "  . luas(10). "<br>";
    echo "Keliling lingkaran Adalah = " . keliling(10). "<br>";
}
    perhitungan();