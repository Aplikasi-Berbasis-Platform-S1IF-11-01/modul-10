<?php
// Set header agar response berupa JSON
header('Content-Type: application/json');

// Data dengan beberapa profil karyawan
$data_profil = [
    [
        'nama' => 'Budi Santoso',
        'pekerjaan' => 'Web Developer',
        'lokasi' => 'Jakarta',
        'umur' => 28,
        'email' => 'budi.santoso@email.com'
    ],
    [
        'nama' => 'Siti Nurhaliza',
        'pekerjaan' => 'UI/UX Designer',
        'lokasi' => 'Bandung',
        'umur' => 25,
        'email' => 'siti.nurhaliza@email.com'
    ],
    [
        'nama' => 'Andi Wijaya',
        'pekerjaan' => 'Mobile Developer',
        'lokasi' => 'Surabaya',
        'umur' => 30,
        'email' => 'andi.wijaya@email.com'
    ],
    [
        'nama' => 'Dewi Lestari',
        'pekerjaan' => 'Data Scientist',
        'lokasi' => 'Yogyakarta',
        'umur' => 27,
        'email' => 'dewi.lestari@email.com'
    ],
    [
        'nama' => 'Rizky Firmansyah',
        'pekerjaan' => 'DevOps Engineer',
        'lokasi' => 'Jakarta',
        'umur' => 32,
        'email' => 'rizky.firmansyah@email.com'
    ],
    [
        'nama' => 'Maya Putri',
        'pekerjaan' => 'Product Manager',
        'lokasi' => 'Bali',
        'umur' => 29,
        'email' => 'maya.putri@email.com'
    ],
    [
        'nama' => 'Faisal Rahman',
        'pekerjaan' => 'Backend Developer',
        'lokasi' => 'Medan',
        'umur' => 26,
        'email' => 'faisal.rahman@email.com'
    ],
    [
        'nama' => 'Linda Kusuma',
        'pekerjaan' => 'Quality Assurance',
        'lokasi' => 'Semarang',
        'umur' => 24,
        'email' => 'linda.kusuma@email.com'
    ]
];

// Ubah array menjadi format JSON dan tampilkan
echo json_encode($data_profil);
?>