<?php
// Andreas Besar Wibowo
// 2311102198 / IF-11-01
header('Content-Type: application/json');

// Data
$data = [
    [
        "nama" => "Budi",
        "pekerjaan" => "Web Developer",
        "lokasi" => "Jakarta"
    ],
    [
        "nama" => "Andreas Besar Wibowo",
        "pekerjaan" => "Data Analyst",
        "lokasi" => "USA"
    ]
];

// Output JSON
echo json_encode($data);
?>