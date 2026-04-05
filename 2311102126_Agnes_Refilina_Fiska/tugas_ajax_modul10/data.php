<?php
header('Content-Type: application/json');

// Data Profil Profesional
$data = [
    'nama'      => 'Agnes Refilina Fiska',
    'pekerjaan' => 'Digital Product Developer',
    'lokasi'    => 'Purwokerto, Indonesia',
    'status'    => 'Active'
];

echo json_encode($data);
?>