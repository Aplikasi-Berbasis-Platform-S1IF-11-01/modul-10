<?php
// Set header agar browser tahu respons berformat JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Izinkan request dari semua origin (untuk development)

// Simulasi "database" sederhana berupa array PHP
$profil = [
    [
        'nama'      => 'Budi Santoso',
        'pekerjaan' => 'Web Developer',
        'lokasi'    => 'Jakarta',
        'avatar'    => 'BS',
        'keahlian'  => ['PHP', 'JavaScript', 'MySQL'],
        'status'    => 'Aktif'
    ],
    [
        'nama'      => 'Rina Kusuma',
        'pekerjaan' => 'UI/UX Designer',
        'lokasi'    => 'Bandung',
        'avatar'    => 'RK',
        'keahlian'  => ['Figma', 'Adobe XD', 'CSS'],
        'status'    => 'Aktif'
    ],
    [
        'nama'      => 'Dimas Prasetyo',
        'pekerjaan' => 'Data Analyst',
        'lokasi'    => 'Surabaya',
        'avatar'    => 'DP',
        'keahlian'  => ['Python', 'SQL', 'Tableau'],
        'status'    => 'Aktif'
    ],
    [
        'nama'      => 'Sari Dewi',
        'pekerjaan' => 'DevOps Engineer',
        'lokasi'    => 'Yogyakarta',
        'avatar'    => 'SD',
        'keahlian'  => ['Docker', 'Kubernetes', 'AWS'],
        'status'    => 'Aktif'
    ]
];

// Ubah array PHP menjadi format JSON lalu tampilkan
echo json_encode([
    'success' => true,
    'total'   => count($profil),
    'data'    => $profil
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
