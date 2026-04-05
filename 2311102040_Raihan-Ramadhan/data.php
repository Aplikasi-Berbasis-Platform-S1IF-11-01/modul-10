<?php
header('Content-Type: application/json');

$data = [
    [
        'nama' => 'Raihan',
        'pekerjaan' => 'Frontend Developer',
        'lokasi' => 'Kalibagor'
    ],
    [
        'nama' => 'Daus',
        'pekerjaan' => 'Backend Developer',
        'lokasi' => 'Songgom'
    ],
    [
        'nama' => 'Alul',
        'pekerjaan' => 'UI/UX Designer',
        'lokasi' => 'Srowot'
    ],
    [
        'nama' => 'Taum',
        'pekerjaan' => 'Frontend Developer',
        'lokasi' => 'Pekaja'
    ],
    [
        'nama' => 'Yatno',
        'pekerjaan' => 'Backend Developer',
        'lokasi' => 'Karanganyar'
    ]
];

echo json_encode($data);
?>