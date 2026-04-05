<?php
header('Content-Type: application/json');

$profil = [
    ['nama' => 'Reli Gita Nurhidayati', 'pekerjaan' => 'Data Analyst',  'lokasi' => 'Purwokerto'],
    ['nama' => 'TEST 1',          'pekerjaan' => 'UI/UX Designer', 'lokasi' => 'Jakarta'],
    ['nama' => 'TEST 2',            'pekerjaan' => 'Web Developer',   'lokasi' => 'Bandung'],
];

echo json_encode($profil);
?>
