<?php
// Mengatur header agar browser mengenali output sebagai JSON
header('Content-Type: application/json');

// Data sederhana dalam bentuk array
$data = [
    'nama'      => 'Kanasya Abdi Aziz',
    'pekerjaan' => 'Web Developer & Cybersecurity Enthusiast',
    'lokasi'    => 'Purwokerto'
];

// Mengubah array PHP menjadi format JSON dan menampilkannya
echo json_encode($data);
?>