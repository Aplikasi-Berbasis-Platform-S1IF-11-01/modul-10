<?php
header('Content-Type: application/json');

// Data sederhana (sebagai database)
$data = [
    'nama' => 'Nabila Shasya',
    'pekerjaan' => 'Web Developer',
    'lokasi' => 'Purwokerto'
];

// Ubah ke JSON dan tampilkan
echo json_encode($data);
?>