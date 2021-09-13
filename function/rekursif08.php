<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
[
"nama" => "Berita",
"subMenu" => [
    [
        "nama" => "Olahraga",
        "subMenu" => [
            [
                "nama" => "Bola"
            ],
        [
    "nama" => "Bulu Tangkis"
    ]
    ]
],
[
    "nama" => "Politik"
],
[
    "nama" => "Manca Negara"
]
]
],
[
    "nama" => "Kontak"
],
];

function tampilkanMenuBertingkat(array $menu) { 
echo "<ul>";
foreach ($menu as $key => $item) {
    echo "<li>{$item['nama']}</li>";

    if (@$istem['subMenu'] && count($item['subMenu'])) {
        tampilkanMenuBertingkat($item['subMenu']);
    }
}
    echo "</ul>";
}