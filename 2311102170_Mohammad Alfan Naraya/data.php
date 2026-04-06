<?php
// Header agar browser mengenali format JSON
header('Content-Type: application/json');

// Data array sesuai instruksi tugas
$data = [
    'nama' => 'Mohammad Alfan Naraya',
    'pekerjaan' => 'Web Developer',
    'lokasi' => 'Jakarta'
];

// Mengirim data ke client
echo json_encode($data);
?>