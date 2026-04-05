<?php
// Menambahkan header agar output terbaca sebagai JSON
header('Content-Type: application/json');

// Membuat array 10 data orang
$data = [
    ['nama' => 'Budi Santoso', 'pekerjaan' => 'Web Developer', 'lokasi' => 'Jakarta'],
    ['nama' => 'Siti Aminah', 'pekerjaan' => 'Data Analyst', 'lokasi' => 'Bandung'],
    ['nama' => 'Andi Wijaya', 'pekerjaan' => 'UI/UX Designer', 'lokasi' => 'Surabaya'],
    ['nama' => 'Dewi Lestari', 'pekerjaan' => 'Project Manager', 'lokasi' => 'Yogyakarta'],
    ['nama' => 'Reza Rahadian', 'pekerjaan' => 'DevOps Engineer', 'lokasi' => 'Semarang'],
    ['nama' => 'Nina Safitri', 'pekerjaan' => 'Quality Assurance', 'lokasi' => 'Malang'],
    ['nama' => 'Hendra Gunawan', 'pekerjaan' => 'Backend Developer', 'lokasi' => 'Bali'],
    ['nama' => 'Lina Marlina', 'pekerjaan' => 'Frontend Developer', 'lokasi' => 'Medan'],
    ['nama' => 'Rizky Pratama', 'pekerjaan' => 'Mobile Developer', 'lokasi' => 'Makassar'],
    ['nama' => 'Maya Indah', 'pekerjaan' => 'System Administrator', 'lokasi' => 'Palembang']
];

// Menerjemahkan array PHP ini menjadi bentuk JSON dan kirimkan ke client
echo json_encode($data);
?>
