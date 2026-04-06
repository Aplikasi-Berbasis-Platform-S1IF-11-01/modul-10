<?php
// Memberitahu browser bahwa data yang dikirim adalah format JSON
header('Content-Type: application/json');

// Membuat array asosiatif untuk data profil
$data = [
    'nama' => 'Shiva Indah Kurnia',
    'pekerjaan' => 'Full-Stack Web Developer',
    'lokasi' => 'Bandung, Indonesia'
];

// Mengubah format array PHP menjadi format JSON lalu menampilkannya
echo json_encode($data);
?>