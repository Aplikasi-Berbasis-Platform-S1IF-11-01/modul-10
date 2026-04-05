//Andika Neviantoro
//2311102167

<?php
header('Content-Type: application/json');

$profil = [
    'nama'      => 'Andika Neviantoro',
    'pekerjaan' => 'UI/UX & Web Developer',
    'lokasi'    => 'Cilacap'
];

echo json_encode($profil);
?>
