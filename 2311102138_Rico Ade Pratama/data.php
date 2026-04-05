<?php
// Tambahkan header sesuai Instruksi Detail
header('Content-Type: application/json');

// Data berupa array dengan 5 profil
$data = [
    [
        'nama' => 'Rico Ade Pratama',
        'pekerjaan' => 'Mahasiswa S1 Teknik Informatika',
        'lokasi' => 'Purwokerto'
    ],
    [
        'nama' => 'Lionel Messi',
        'pekerjaan' => 'Fullstack Developer',
        'lokasi' => 'Jakarta Selatan'
    ],
    [
        'nama' => 'Cristiano Ronaldo',
        'pekerjaan' => 'UI/UX Designer',
        'lokasi' => 'Bandung'
    ],
    [
        'nama' => 'Kylian Mbappe',
        'pekerjaan' => 'Data Scientist',
        'lokasi' => 'Surabaya'
    ],
    [
        'nama' => 'Andre Onana',
        'pekerjaan' => 'Project Manager',
        'lokasi' => 'Yogyakarta'
    ]
];

// Ubah data menjadi format JSON sesuai Instruksi Detail
echo json_encode($data);
?>