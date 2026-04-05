<?php
// ============================================================
// data.php - Server: menyediakan data dalam format JSON
// 2311102128 - Qonita Rahayu Atmi
// ============================================================

// Header agar browser mengetahui response ini adalah JSON
header('Content-Type: application/json');

// Array asosiatif data profil
$profil = [
    [
        'nama'      => 'Qonita Rahayu Atmi',
        'pekerjaan' => 'Mahasiswa Informatika',
        'lokasi'    => 'Purwokerto',
    ],
    [
        'nama'      => 'Budi',
        'pekerjaan' => 'Web Developer',
        'lokasi'    => 'Jakarta',
    ],
    [
        'nama'      => 'Aisyah Putri',
        'pekerjaan' => 'UI/UX Designer',
        'lokasi'    => 'Bandung',
    ],
    [
        'nama'      => 'Daffa Rizky',
        'pekerjaan' => 'Backend Engineer',
        'lokasi'    => 'Surabaya',
    ],
    [
        'nama'      => 'Cahya Dewi',
        'pekerjaan' => 'Data Analyst',
        'lokasi'    => 'Yogyakarta',
    ],
];
// Ubah array ke format JSON dan tampilkan
echo json_encode($profil);
