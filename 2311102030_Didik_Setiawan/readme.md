

<div align="center">
  <br />
  <h1>LAPORAN PRAKTIKUM <br>WEB MANAGEMENT PRODUCT
</h1>
  <br />
  <h3>MODUL 10 <br> ajax</h3>
  <br />
  <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F1.bp.blogspot.com%2F-vb7jyBjK-sM%2FXXfKp51LrjI%2FAAAAAAAACts%2FEjcXzlgZwSswNWXsBHMyX-6aav1mjA77QCPcBGAYYCw%2Fs1600%2FLogo_Telkom_University_potrait.png&f=1&nofb=1&ipt=9d030d54102ea96369d39fe491220e0536195abc8ee443279c1a420302206400" alt="Logo Telkom" width="300"> 
  <br /><br /><br />
  
  <h3>Disusun Oleh :</h3>
  <p>
    <strong>Didik Setiawan</strong><br>
    <strong>2311102030</strong><br>
    <strong>IF-11-REG-01</strong>
  </p>
  <br />
  
  <h3>Dosen Pengampu :</h3>
  <p><strong>Dimas Fanny Hebrasianto Permadi, S.ST., M.Kom</strong></p>
  <br />
  
  <h4>Asisten Praktikum :</h4>
  <strong>Apri Pandu Wicaksono</strong> <br>
  <strong>Rangga Pradarrell Fathi</strong>
  <br />
  
  <h3>LABORATORIUM HIGH PERFORMANCE<br>FAKULTAS INFORMATIKA<br>UNIVERSITAS TELKOM PURWOKERTO<br>2026</h3>
</div>

---

## DASAR TEORI

AJAX (Asynchronous JavaScript and XML) adalah teknik dalam pengembangan web yang memungkinkan pertukaran data antara browser dan server dilakukan secara asynchronous tanpa harus me-reload seluruh halaman. Dengan AJAX, aplikasi web dapat menjadi lebih interaktif dan responsif karena hanya bagian tertentu dari halaman yang diperbarui. AJAX bekerja dengan memanfaatkan objek JavaScript seperti XMLHttpRequest atau fetch untuk mengirim dan menerima data dari server, biasanya dalam format JSON atau XML. Teknologi ini sering digunakan untuk fitur seperti pencarian live, validasi form, dan update konten secara real-time tanpa mengganggu pengalaman pengguna.



## UNGUIDED

### kode index.html



```bash
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Modul 10 - AJAX</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f3f4f6;
            min-height: 100vh;
            padding: 32px 16px;
            color: #111827;
        }

        .container {
            background: #ffffff;
            padding: 28px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            max-width: 980px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 8px;
            font-size: 28px;
            font-weight: 600;
            text-align: center;
        }

        .subtitle {
            color: #6b7280;
            margin-bottom: 24px;
            font-size: 14px;
            text-align: center;
        }

        .button-container {
            text-align: center;
            margin-bottom: 24px;
        }

        #btn-tampilkan {
            background: #111827;
            color: #ffffff;
            border: 1px solid #111827;
            padding: 12px 24px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        #btn-tampilkan:hover {
            background: #1f2937;
            transform: translateY(-2px);
        }

        #btn-tampilkan:active {
            transform: translateY(0);
        }

        #hasil-profil {
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #hasil-profil.empty {
            color: #6b7280;
            font-style: italic;
            font-size: 15px;
        }

        .loading {
            color: #374151;
            font-weight: 500;
            font-size: 16px;
        }

        .profil-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
            animation: fadeIn 0.5s ease-in;
            width: 100%;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .profil-card {
            background: #f9fafb;
            padding: 18px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            transition: border-color 0.2s ease, transform 0.2s ease;
        }

        .profil-card:hover {
            border-color: #d1d5db;
            transform: translateY(-2px);
        }

        .profil-card h3 {
            margin-bottom: 12px;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-item {
            margin-bottom: 8px;
            color: #374151;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .info-item strong {
            color: #111827;
            min-width: 82px;
        }

        .icon {
            font-size: 16px;
        }

        .total-count {
            text-align: center;
            margin-top: 18px;
            padding: 12px;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            color: #111827;
            font-weight: 600;
            font-size: 14px;
        }

        @media (max-width: 640px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            #btn-tampilkan {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tugas Modul 10</h1>
        <p class="subtitle">Implementasi AJAX dengan PHP & JavaScript - Data Karyawan</p>
        
        <div class="button-container">
            <button id="btn-tampilkan">
                Tampilkan Semua Profil
            </button>
        </div>
        
        <div id="hasil-profil" class="empty">
            Klik tombol untuk menampilkan semua profil karyawan
        </div>
    </div>

    <script>
        const hasilDiv = document.getElementById('hasil-profil');
        const tombolTampilkan = document.getElementById('btn-tampilkan');

        function renderCard(profil) {
            return `
                <div class="profil-card">
                    <h3><span class="icon">👤</span>${profil.nama}</h3>
                    <div class="info-item"><span class="icon">💼</span><strong>Pekerjaan:</strong> ${profil.pekerjaan}</div>
                    <div class="info-item"><span class="icon">📍</span><strong>Lokasi:</strong> ${profil.lokasi}</div>
                    <div class="info-item"><span class="icon">🎂</span><strong>Umur:</strong> ${profil.umur} tahun</div>
                    <div class="info-item"><span class="icon">📧</span><strong>Email:</strong> ${profil.email}</div>
                </div>
            `;
        }

        async function tampilkanProfil() {
            hasilDiv.innerHTML = '<span class="loading">Memuat data...</span>';
            hasilDiv.className = 'loading';

            try {
                const response = await fetch('data.php');
                if (!response.ok) {
                    throw new Error('Gagal mengambil data dari server');
                }

                const data = await response.json();
                const cards = data.map(renderCard).join('');

                hasilDiv.innerHTML = `
                    <div class="profil-grid">${cards}</div>
                    <div class="total-count">Total Karyawan: ${data.length} orang</div>
                `;
                hasilDiv.className = '';
            } catch (error) {
                hasilDiv.innerHTML = `<span style="color: #b91c1c;">Error: ${error.message}</span>`;
                hasilDiv.className = '';
                console.error('Error:', error);
            }
        }

        tombolTampilkan.addEventListener('click', tampilkanProfil);
    </script>
</body>
</html>
```
##### penjelasan
Struktur HTML digunakan sebagai kerangka tampilan, sedangkan CSS berfungsi untuk memperindah desain seperti card dan layout grid. JavaScript mengambil elemen DOM dan menggunakan fungsi fetch() untuk mengambil data dari file data.php dalam format JSON. Data yang diperoleh kemudian diproses menggunakan fungsi renderCard() dan ditampilkan ke halaman dalam bentuk card. Selama proses berlangsung ditampilkan status loading, serta menggunakan error handling untuk menampilkan pesan jika terjadi kesalahan

### kode data.php


```bash
<?php
// Set header agar response berupa JSON
header('Content-Type: application/json');

// Data dengan beberapa profil karyawan
$data_profil = [
    [
        'nama' => 'Budi Santoso',
        'pekerjaan' => 'Web Developer',
        'lokasi' => 'Jakarta',
        'umur' => 28,
        'email' => 'budi.santoso@email.com'
    ],
    [
        'nama' => 'Siti Nurhaliza',
        'pekerjaan' => 'UI/UX Designer',
        'lokasi' => 'Bandung',
        'umur' => 25,
        'email' => 'siti.nurhaliza@email.com'
    ],
    [
        'nama' => 'Andi Wijaya',
        'pekerjaan' => 'Mobile Developer',
        'lokasi' => 'Surabaya',
        'umur' => 30,
        'email' => 'andi.wijaya@email.com'
    ],
    [
        'nama' => 'Dewi Lestari',
        'pekerjaan' => 'Data Scientist',
        'lokasi' => 'Yogyakarta',
        'umur' => 27,
        'email' => 'dewi.lestari@email.com'
    ],
    [
        'nama' => 'Rizky Firmansyah',
        'pekerjaan' => 'DevOps Engineer',
        'lokasi' => 'Jakarta',
        'umur' => 32,
        'email' => 'rizky.firmansyah@email.com'
    ],
    [
        'nama' => 'Maya Putri',
        'pekerjaan' => 'Product Manager',
        'lokasi' => 'Bali',
        'umur' => 29,
        'email' => 'maya.putri@email.com'
    ],
    [
        'nama' => 'Faisal Rahman',
        'pekerjaan' => 'Backend Developer',
        'lokasi' => 'Medan',
        'umur' => 26,
        'email' => 'faisal.rahman@email.com'
    ],
    [
        'nama' => 'Linda Kusuma',
        'pekerjaan' => 'Quality Assurance',
        'lokasi' => 'Semarang',
        'umur' => 24,
        'email' => 'linda.kusuma@email.com'
    ]
];

// Ubah array menjadi format JSON dan tampilkan
echo json_encode($data_profil);
?>
```
##### penjelasan
Kode PHP tersebut berfungsi sebagai penyedia data (server-side) untuk AJAX dengan mengirimkan data dalam format JSON. Pertama, header('Content-Type: application/json') digunakan agar browser mengetahui bahwa data yang dikirim berupa JSON. Selanjutnya, data karyawan disimpan dalam array asosiatif $data_profil yang berisi beberapa informasi seperti nama, pekerjaan, lokasi, umur, dan email. Pada bagian akhir, fungsi json_encode() digunakan untuk mengubah array PHP menjadi format JSON, kemudian ditampilkan menggunakan echo sehingga dapat diambil dan diproses oleh JavaScript (Fetch API) di sisi client.




### tampilan 
![Alt 3](https://raw.githubusercontent.com/didiksetia1/asset/refs/heads/main/Screenshot%202026-04-06%20221617.png)