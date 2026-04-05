<?php
/**
 * MODUL 10 — AJAX: data.php
 * 
 * Nama  : Azaria Nanda Putri
 * NIM   : 2311102147
 * Tujuan: Menyediakan data profil dalam format JSON
 *         untuk dikonsumsi oleh index.html via AJAX (fetch)
 */

// Set header agar browser tahu response ini adalah JSON
header('Content-Type: application/json');

// ============================================================
// DATA PROFIL (Array Asosiatif)
// ============================================================
$profil = [
    [
        "nama"      => "Azaria Nanda Putri",
        "pekerjaan" => "Mahasiswa Informatika",
        "lokasi"    => "Purwokerto, Jawa Tengah",
    ],
    [
        "nama"      => "Budi Santoso",
        "pekerjaan" => "Software Engineer",
        "lokasi"    => "Jakarta Selatan, DKI Jakarta",
    ],
    [
        "nama"      => "Citra Dewi",
        "pekerjaan" => "UI/UX Designer",
        "lokasi"    => "Bandung, Jawa Barat",
    ],
    [
        "nama"      => "Daffa Ramadhan",
        "pekerjaan" => "Data Analyst",
        "lokasi"    => "Yogyakarta, DIY",
    ],
];

// Encode array menjadi format JSON dan kirim sebagai output
echo json_encode($profil, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
