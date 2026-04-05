<?php
header('Content-Type: application/json');

$data = [
    'nama' => 'Novel',
    'pekerjaan' => 'UI/UX Designer',
    'lokasi' => 'Indonesia'
];

echo json_encode($data);
?>