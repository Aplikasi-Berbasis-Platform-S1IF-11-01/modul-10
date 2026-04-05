<?php
header('Content-Type: application/json');

// Database
$data = [
    [
        "nama" => "Boutefhika Nuha Z. K",
        "pekerjaan" => "Web Developer",
        "lokasi" => "Jakarta"
    ],
    [
        "nama" => "Ziya",
        "pekerjaan" => "UI/UX Designer",
        "lokasi" => "Bandung"
    ],
    [
        "nama" => "Satria",
        "pekerjaan" => "Backend Developer",
        "lokasi" => "Surabaya"
    ]
];

// Ubah ke JSON
echo json_encode($data);
?>