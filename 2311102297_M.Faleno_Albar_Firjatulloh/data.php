<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$profil = [
    ['nama' => 'Budi Santoso',    'pekerjaan' => 'Web Developer',  'lokasi' => 'Jakarta'],
    ['nama' => 'Sari Dewi',       'pekerjaan' => 'UI/UX Designer', 'lokasi' => 'Bandung'],
    ['nama' => 'Ahmad Fauzi',     'pekerjaan' => 'Data Analyst',   'lokasi' => 'Surabaya'],
    ['nama' => 'Rina Marlina',    'pekerjaan' => 'Project Manager','lokasi' => 'Yogyakarta'],
];

echo json_encode($profil);
?>