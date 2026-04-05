<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$profil = [
    ['nama' => 'Yoga Hogantara',    'pekerjaan' => 'Web Developer',   'lokasi' => 'PEWETEH ajah'],
    ['nama' => 'Yhota',       'pekerjaan' => 'UI/UX Designer',  'lokasi' => 'Bandung'],
    ['nama' => 'YHOTA',     'pekerjaan' => 'Data Scientist',  'lokasi' => 'Surabaya'],
];

// untuk mengambil 1 profil secara acak
$random = $profil[array_rand($profil)];

echo json_encode($random);
?>