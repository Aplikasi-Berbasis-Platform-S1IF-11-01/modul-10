<?php
// Set header agar browser tahu ini data JSON
header('Content-Type: application/json');

// Data profil (simulasi database sederhana)
$profil = [
    'nama'      => 'Budi Santoso',
    'pekerjaan' => 'Web Developer',
    'lokasi'    => 'Jakarta'
];

// Ubah array ke format JSON dan tampilkan
echo json_encode($profil);
?>
