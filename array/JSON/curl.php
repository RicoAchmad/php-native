<?php

$url = "https://api.kawalcorona.com/";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1);

$datacovid = curl_exec($ch);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
</head>
<body>
    <center>
        <nav>
            <a href="json-ap1.php">Data Covid</a> |
            <a href="json-indonesia.php">Data Indonesia</a> |
            <a href="json-Provinsi.php">Data covid provinsi</a> |
</nav>
</center>
<fieldset>
    <legend>Data Covid</legend>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Negara</th>
            <th>Positif</th>
            <th>Meninggal</th>
            <th>Sembuh</th>
</tr>
<?php

$no=1;
$data = json_decode($dataCovid);
foreach ($data as $covid) {
    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $covid->attributes->Country_Region; ?></td>
        <td><?php echo $covid->attributes->Confirmed; ?></td>
        <td><?php echo $covid->attributes->Deaths; ?></td>
        <td><?php echo $covid->attributes->Recovered; ?></td>
    </tr>
    <?php }?>
</table>
</fieldset>
</body>
</html>