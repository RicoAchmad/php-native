<?php
$url = "https://api.kawalcorona.com/positif/";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$datacovid = curl_exec($ch);

curl_close($ch);

echo $datacovid;
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
            <a href ="json-api.php">Data Covid</a> |
            <a href="json-indonesia.php">Data Indonesia</a> |
            <a href="json-provinsi.php">Data covid provinsi</a> |
</nav>
</center>
<fieldset>
    <legend>Data Covid</legend>
    <table border="1">
    <?php $data = json_decode($dataCovid);?>
    <tr>
        <th><?php echo $data->name; ?></th>
</tr>
<tr>
    <td><?php echo $data->value; ?></td>
</tr>
</table>
</fieldset>
</body>
</html>