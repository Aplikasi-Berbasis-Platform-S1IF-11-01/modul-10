<?php
// Set header agar browser mengenali output ini sebagai JSON
header('Content-Type: application/json');

// Membuat database sederhana menggunakan array asosiatif
$data = [
    [
        'nama' => 'Dheva Dewa Septiantoni',
        'pekerjaan' => 'Web Developer',
        'lokasi' => 'Majalengka, Indonesia',
        'hobi' => ['Coding', 'Traveling', 'Cooking']
    ],
    [
        'nama' => 'Budiono Siregar',
        'pekerjaan' => 'Kapal Laut',
        'lokasi' => 'Medan, Indonesia',
        'hobi' => ['Memancing', 'Berkebun', 'Berenang']
    ]
];

// Mengubah array PHP menjadi format string JSON dan menampilkannya
echo json_encode($data);
?>