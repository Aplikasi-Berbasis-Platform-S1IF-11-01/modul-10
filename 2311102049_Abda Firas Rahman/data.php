<?php
// Set header 
header('Content-Type: application/json');

// Membuat array sederhana
$data = [
    'nama' => 'Om Burhanudin',
    'pekerjaan' => 'Web Developer & hacker',
    'lokasi' => 'Jakarta - Pasar Senen'
];
// Abda Firas Rahman - 2311102049 - IF-REG-01
// Mengubah array menjadi format JSON
echo json_encode($data);
?>