<?php
// Menentukan header agar browser mengenali ini sebagai data JSON
header('Content-Type: application/json');

// Database sederhana berupa array
$data_anak = [
    [
        'nama' => 'Ahmad Rifai',
        'pekerjaan' => 'Pelajar',
        'lokasi' => 'Jakarta'
    ],
    [
        'nama' => 'Siti Aminah',
        'pekerjaan' => 'Pelajar',
        'lokasi' => 'Bandung'
    ],
    [
        'nama' => 'Budi Santoso',
        'pekerjaan' => 'Pelajar',
        'lokasi' => 'Surabaya'
    ]
];

// Mengirimkan data dalam format JSON
echo json_encode($data_anak);
?>