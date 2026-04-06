<?php
// Tambahkan header agar browser tahu response berformat JSON
header('Content-Type: application/json');

// "Database" sederhana berupa array profil
$profil = [
    ['nama' => 'Tegar',   'pekerjaan' => 'Web Developer',  'lokasi' => 'Cilacap'],
    ['nama' => 'Sari',    'pekerjaan' => 'UI/UX Designer',  'lokasi' => 'Bandung'],
    ['nama' => 'Reza',    'pekerjaan' => 'Data Analyst',    'lokasi' => 'Jakarta'],
    ['nama' => 'Dina',    'pekerjaan' => 'Backend Engineer','lokasi' => 'Surabaya'],
    ['nama' => 'Farhan',  'pekerjaan' => 'Mobile Developer','lokasi' => 'Yogyakarta'],
];

// Ubah array PHP menjadi format JSON lalu tampilkan
echo json_encode($profil, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
