<?php
header('Content-Type: application/json');

$profil = [
    'nama' => "Irshad Benaya Fardeca",
    'nim' => "2311102199",
    'kelas' => "IF-11-01"
];

echo json_encode($profil);
