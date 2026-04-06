<?php
header('Content-Type: application/json');

// Array multidimensi yang berisi 4 data profil
$data = [
    ['nama' => 'Budi', 'pekerjaan' => 'Web Developer', 'lokasi' => 'Jakarta'],
    ['nama' => 'Nadine', 'pekerjaan' => 'UI/UX Designer', 'lokasi' => 'Bandung'],
    ['nama' => 'Satrio', 'pekerjaan' => 'Security Engineer', 'lokasi' => 'Surabaya'],
    ['nama' => 'Mutiara', 'pekerjaan' => 'Data Scientist', 'lokasi' => 'Yogyakarta']
];

echo json_encode($data);
?>