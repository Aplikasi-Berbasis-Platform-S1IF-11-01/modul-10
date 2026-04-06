<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$profil = [
    ['nama' => 'Arjun', 'pekerjaan' => 'Jualan Cilok', 'lokasi' => 'Purbalingga'],
    ['nama' => 'Werdho', 'pekerjaan' => 'Jualan Duren', 'lokasi' => 'Kalimanah Wetan'],
    ['nama' => 'Kumoro', 'pekerjaan' => 'Jualan Pancake Durian', 'lokasi' => 'Jawa Tengah'],
];

echo json_encode($profil);
?>