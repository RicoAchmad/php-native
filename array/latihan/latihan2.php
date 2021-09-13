<?php
$data = [
    ["dosen" => "Aceng Dumbledore" ,
    "subMenu" => [
        ["mahasiswa" => "Harry",
        "pelajaran" => [
            ["pelajaran" => "Indonesia"],
            ["pelajaran" => "Matematika"],
            ["pelajaran" => "Fisika"]
        ],

        "hobi" => [
            ["hobi" => "Berenang"]
        ]
        ],

        ["mahasiswa" => "Hermione",
        "pelajaran" =>[
            ["pelajaran" => "Biologi"],
            ["pelajaran" => "Kimia"],
            ["pelajaran" => "Inggris"]
        ],

        "hobi" => [
            ["hobi" => "Membaca"]
        ]
        ],

        ["mahasiswa" => "Ronald",
        "pelajaran" => [
            ["pelajaran" => "IPS"],
            ["pelajaran" => "PKN"],
            ["pelajaran" => "Olahraga"]
        ],

        "hobi" => [
            ["hobi" => "Bernyanyi"]]],
        ]
        ],

        ["dosen" => "Dedi Snape" ,
    "subMenu" => [
        ["mahasiswa" => "Malfoy",
        "pelajaran" => [
            ["pelajaran" => "Daerah"],
            ["pelajaran" => "Matematika"],
            ["pelajaran" => "Indonesia"]
        ],

        "hobi" => [
            ["hobi" => "Berkebun"]
        ]
        ],

        ["mahasiswa" => "Luna",
        "pelajaran" =>[
            ["pelajaran" => "Kimia"],
            ["pelajaran" => "Fisika"],
            ["pelajaran" => "Biologi"]
        ],

        "hobi" => [
            ["hobi" => "Menggambar"]
        ]
        ],

        ["mahasiswa" => "Vincent",
        "pelajaran" =>[
            ["pelajaran" => "Inggris"],
            ["pelajaran" => "PKN"],
            ["pelajaran" => "Matematika"]
        ],

        "hobi" => [
            ["hobi" => "Basket"]
        ]
        ],
        ]
        ],
    ];

    $no = 1;
    foreach ($data as $key => $index){
        echo "Nama Dosen : ".
        $index['dosen']. "<br>";
        echo "Mahasiswa : ";
        echo "<ul>";

        foreach ($index['subMenu'] as $menu) {
            echo "<li> Data Ke-".$no++."</li>";
            echo "Mahasiswa : ".
            $menu['mahasiswa'];
            echo "<br>Mata Kuliah : ";
            echo "<ol>";

            foreach ($menu['pelajaran'] as $matkul) {
                echo "<li>".
                $matkul['pelajaran']."</li>";
            }
            echo "</ol>";
        echo "Hobi :";
        echo "<ol>";
        foreach ($menu['hobi'] as $hobi) {
            echo "<li>".$hobi['hobi']."</li>";
        }
        echo "</ol>";
    }
        
        echo "</ul>";

    }
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