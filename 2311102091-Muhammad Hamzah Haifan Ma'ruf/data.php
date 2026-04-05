<?php
header('Content-Type: application/json');

$data = [
    "nama" => "Muhammad Hamzah Haifan Ma'ruf",
    "pekerjaan" => "Mahasewa",
    "lokasi" => "Jakarta"
];

echo json_encode($data);
?>