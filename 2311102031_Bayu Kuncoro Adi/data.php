<?php
header('Content-Type: application/json');

$data = [
    [
        "nama" => "Bayu Kuncoro Adi",
        "nim" => "2311102031",
        "pekerjaan" => "Mahasiswa",
        "lokasi" => "Purwokerto"
    ],
    [
        "nama" => "Budi Gunadi Sadikin",
        "nim" => "2311100001",
        "pekerjaan" => "Menteri Kesehatan RI",
        "lokasi" => "Jakarta"
    ],
    [
        "nama" => "Prabowo Subianto",
        "nim" => "2311100002",
        "pekerjaan" => "Presiden RI",
        "lokasi" => "Tembalang"
    ]
];

echo json_encode($data);