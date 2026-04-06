<?php
header('Content-Type: application/json');

$daftarProfil = [
    [
        'nama' => 'Alya Rahma',
        'pekerjaan' => 'Frontend Developer',
        'lokasi' => 'Bandung',
        'avatar' => 'AR',
        'keahlian' => ['HTML', 'CSS', 'JavaScript'],
        'status' => 'Aktif'
    ],
    [
        'nama' => 'Naufal Luthfi Assary',
        'pekerjaan' => 'Backend Developer',
        'lokasi' => 'Jakarta',
        'avatar' => 'NL',
        'keahlian' => ['PHP', 'Laravel', 'MySQL'],
        'status' => 'Aktif'
    ],
    [
        'nama' => 'Intan Permata',
        'pekerjaan' => 'UI/UX Designer',
        'lokasi' => 'Surabaya',
        'avatar' => 'IP',
        'keahlian' => ['Figma', 'Canva', 'Adobe XD'],
        'status' => 'Aktif'
    ],
    [
        'nama' => 'Danenen Amba',
        'pekerjaan' => 'Data Analyst',
        'lokasi' => 'Bumicantik',
        'avatar' => 'DA',
        'keahlian' => ['Python', 'SQL', 'Tableau'],
        'status' => 'Aktif'
    ]
];

$response = [
    'pesan' => 'Data profil berhasil diambil',
    'jumlah' => count($daftarProfil),
    'profil' => $daftarProfil
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>