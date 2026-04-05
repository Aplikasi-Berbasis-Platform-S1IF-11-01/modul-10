<!-- 2311102191 -->
<!-- FAHREZA ILHAM WICAKSONO -->
<!-- 👍🏿 -->

<?php
header('Content-Type: application/json');

$data = [
    [
        'name' => 'Fahreza Ilham Wicaksono',
        'job' => 'Web Developer',
        'address' => 'Purwokerto'
    ],
    [
        'name' => 'Andika Neviantoro',
        'job' => 'UI/UX Designer',
        'address' => 'Kroya'
    ],
    [
        'name' => 'Andreas Besar Wibowo',
        'job' => 'Data Analyst',
        'address' => 'Cilacap'
    ],
    [
        'name' => 'Irshad Benaya Fardeca',
        'job' => 'Full Stack Developer',
        'address' => 'Sampang'
    ]
];

echo json_encode($data);