<?php

// Set header agar browser tahu ini adalah data JSON
header('Content-Type: application/json');

// Data sederhana (simulasi database)
 $data = [
    ['nama' => 'Budi', 'pekerjaan' => 'Web Developer', 'lokasi' => 'Jakarta'],
    ['nama' => 'Diva', 'pekerjaan' => 'Data Scientist', 'lokasi' => 'Semarang'],
    ['nama' => 'Alpukat', 'pekerjaan' => 'Mobile Developer', 'lokasi' => 'Surabaya']
];

// Ubah array menjadi JSON dan tampilkan
echo json_encode($data);