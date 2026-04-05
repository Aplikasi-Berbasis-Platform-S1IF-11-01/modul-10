<?php
// Mengatur header agar browser mengenali output sebagai JSON
header('Content-Type: application/json');
// Aisyah Anis Mazaya
// 2311102095
// IF-REG-01
// Membuat array data sederhana
$data = [
    'nama'      => 'Aisyah Anis Mazaya',
    'pekerjaan' => 'Cloud Engineer & DevOps',
    'lokasi'    => 'Kalimantan Selatan - Banjarbaru - Indonesia'
];

// Mengubah array PHP menjadi format JSON 
echo json_encode($data);
?>