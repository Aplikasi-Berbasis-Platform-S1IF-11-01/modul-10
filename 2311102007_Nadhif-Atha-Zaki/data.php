<?php
header('Content-Type: application/json');

// Data
$data = [
    "nama" => "Nadhif Atha Zaki",
    "pekerjaan" => "Pengamen",
    "lokasi" => "Purwokerto"
];

// Output JSON
echo json_encode($data);
exit;