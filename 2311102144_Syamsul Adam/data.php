<?php
// Memberitahu browser bahwa konten yang dikirim adalah JSON
header('Content-Type: application/json');

// Database sederhana berupa array
$data = [
    'nama' => 'Adam',
    'pekerjaan' => 'IT Network specialist',
    'lokasi' => 'Jakarta'
];

// Mengubah array PHP menjadi string JSON
echo json_encode($data);
?>