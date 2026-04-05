<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$profil = [
    ['nama' => 'Budi Santoso', 'pekerjaan' => 'Web Developer', 'lokasi' => 'Jakarta'],
    ['nama' => 'Rizal Dwi Anggoro', 'pekerjaan' => 'Network Engineer', 'lokasi' => 'Cilacap'],
    ['nama' => 'Janaka Pambang', 'pekerjaan' => 'Data Analyst', 'lokasi' => 'Surabaya'],
];

echo json_encode($profil);
?>
