<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
</head>
<body>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Dosen</th>
        <th>Mata Kuliah</th>
        <th>Hobi</th>
</tr>

<?php $no = 1; ?>
<?php foreach($data as $key => $index) {
    foreach ($index['subMenu'] as $menu) {?>
    <tr>
    <td>
        <?php echo "<center>".$no++; ?></td>
        <td><?php echo "<center>" .$menu['mahasiswa'];?></td>
        <td><?php echo "<center>" .$index['dosen'];?></td>

        <?php echo "<td>";
        foreach($menu['pelajaran'] as $matkul) { ?>
        <?php echo "<li>".$matkul['pelajaran']."</li>";?>
        <?php } ?>
        <?php
        echo "<td>";
        foreach($menu['hobi'] as $hobi) { ?>
        <?php echo "<li>".$hobi['hobi']."</li>";
        }
        echo "</td>";
    }
}
?>
</td>
</tr>
</table>
</body>
</html>