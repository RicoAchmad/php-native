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
            ["hobi" => "Berenang"],
            ["hobi" => "Mancing"],
            ["hobi" => "Bernyanyi"]
        ]
        ],

        ["mahasiswa" => "Hermione",
        "pelajaran" =>[
            ["pelajaran" => "Biologi"],
            ["pelajaran" => "Kimia"],
            ["pelajaran" => "Inggris"]
        ],

        "hobi" => [
            ["hobi" => "Membaca"],
            ["hobi" => "Menonton"],
            ["hobi" => "Bermain Game"]
        ]
        ],

        ["mahasiswa" => "Ronald",
        "pelajaran" => [
            ["pelajaran" => "IPS"],
            ["pelajaran" => "PKN"],
            ["pelajaran" => "Olahraga"]
        ],

        "hobi" => [
            ["hobi" => "Bernyanyi"],
            ["hobi" => "Sepakbola"],
            ["hobi" => "Berlari"]]],
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
            ["hobi" => "Berenang"],
            ["hobi" => "Mancing"],
            ["hobi" => "Bernyanyi"]
        ]
        ],

        ["mahasiswa" => "Luna",
        "pelajaran" =>[
            ["pelajaran" => "Kimia"],
            ["pelajaran" => "Fisika"],
            ["pelajaran" => "Biologi"]
        ],

        "hobi" => [
            ["hobi" => "Membaca"],
            ["hobi" => "Menonton"],
            ["hobi" => "Berkebun"]
        ]
        ],

        ["mahasiswa" => "Vincent",
        "pelajaran" =>[
            ["pelajaran" => "Inggris"],
            ["pelajaran" => "PKN"],
            ["pelajaran" => "Matematika"]
        ],

        "hobi" => [
            ["hobi" => "Bernyanyi"],
            ["hobi" => "Basket"],
            ["hobi" => "Berenang"]
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