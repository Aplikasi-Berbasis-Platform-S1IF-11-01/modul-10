<?php
// Tambahkan header agar browser tahu bahwa response ini adalah JSON
header('Content-Type: application/json');

// Array PHP sebagai database sederhana
$profil = [
    "nama"      => "Budi",
    "pekerjaan" => "Web Developer",
    "lokasi"    => "Jakarta"
];

// Ubah array menjadi format JSON dan tampilkan
echo json_encode($profil);
?>