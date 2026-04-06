<div align="center">
  <br />
  <h1>LAPORAN PRAKTIKUM <br> APLIKASI BERBASIS PLATFORM</h1>
  <br />
  <h3>MODUL 10 <br> AJAX</h3>
  <br />
  <img src="assets/logo.jpeg" alt="Logo" width="300">
  <br />
  <br />
  <br />
  <h3>Disusun Oleh :</h3>
  <p>
    <strong>Mohammad Alfan Naraya</strong><br>
    <strong>2311102170</strong><br>
    <strong>S1 IF-11-01</strong>
  </p>
  <br />
  <h3>Dosen Pengampu :</h3>
  <p>
    <strong>Dimas Fanny Hebrasianto Permadi, S.ST., M.Kom</strong>
  </p>
  <br />
  <br />
  <h4>Asisten Praktikum :</h4>
  <strong>Apri Pandu Wicaksono</strong> <br>
  <strong>Rangga Pradarrell Fathi</strong>
  <br />
  <br />
  <br />
  <br />
  <h3>LABORATORIUM HIGH PERFORMANCE <br> FAKULTAS INFORMATIKA <br> UNIVERSITAS TELKOM PURWOKERTO <br> 2026</h3>
</div>

---

## 1. Dasar Teori

**AJAX** (Asynchronous JavaScript and XML) merupakan teknik kontemporer yang memungkinkan halaman web berbagi data dengan server secara asinkron, dengan keunggulan utama berupa kemampuan memperbarui konten tertentu tanpa perlu memuat ulang seluruh halaman sehingga interaksi menjadi lebih cepat dan responsif. Secara teknis, AJAX menggunakan JavaScript untuk berkomunikasi dengan server di balik layar, di mana format JSON (JavaScript Object Notation) kini lebih populer dibandingkan XML karena sifatnya yang lebih ringan dan mudah diolah. Perkembangan teknik ini dapat dilakukan melalui metode konvensional XMLHttpRequest, penggunaan library tambahan seperti jQuery AJAX, atau standar modern Fetch API yang lebih sederhana dan efektif sebagaimana yang diterapkan dalam praktikum ini. Dalam sinergi antara PHP dan JavaScript, PHP bertugas menyediakan data dalam bentuk array asosiatif yang kemudian diubah menjadi format JSON melalui fungsi json_encode, dengan dukungan header application/json agar browser dapat mengenali format data dengan benar. Prosedur di sisi pengguna dimulai saat tindakan seperti klik tombol memicu fungsi fetch(), kemudian data diambil dari file PHP dan diubah menjadi objek JavaScript melalui metode .json(), hingga akhirnya konten ditampilkan ke elemen HTML secara dinamis. Implementasi AJAX dalam praktik ini berhasil menciptakan halaman web sederhana yang mampu menampilkan data profil seperti nama, pekerjaan, dan lokasi dari server secara real-time, menjadikannya komponen vital dalam pengembangan aplikasi web modern seperti dashboard dan sistem berbasis API.

---

## 2. Penjelasan Kode PHP, HTML, dan AJAX

### Kode Program (`data.php`)

```php
<?php

header('Content-Type: application/json');


$data = [
    'nama' => 'Mohammad Alfan Naraya',
    'pekerjaan' => 'Web Developer',
    'lokasi' => 'Jakarta'
];


echo json_encode($data);
?>
```

### Kode Program (`index.html`)

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Alfan - Modul10</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-deep: #0f172a;       /* Slate Dark */
            --card-surface: #1e293b;  /* Slate Medium */
            --accent-blue: #38bdf8;   /* Sky Blue */
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-deep);
            background-image: 
                radial-gradient(at 0% 0%, rgba(56, 189, 248, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(56, 189, 248, 0.05) 0px, transparent 50%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            color: var(--text-primary);
        }

        .profile-card {
            background: var(--card-surface);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 28px;
            padding: 3.5rem 2.5rem;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .icon-circle {
            background: rgba(56, 189, 248, 0.1);
            color: var(--accent-blue);
            width: 64px;
            height: 64px;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }

        .instruction {
            color: var(--text-secondary);
            font-size: 0.875rem;
            margin-bottom: 2.5rem;
            line-height: 1.5;
        }

        /* Tombol Sesuai Permintaan: Teks Tetap "Tampilkan Profil" */
        .btn-main {
            background-color: var(--accent-blue);
            color: var(--bg-deep);
            border: none;
            border-radius: 14px;
            padding: 14px 28px;
            font-weight: 600;
            font-size: 0.95rem;
            width: 100%;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-main:hover {
            background-color: #7dd3fc;
            transform: translateY(-2px);
            box-shadow: 0 12px 20px -5px rgba(56, 189, 248, 0.3);
        }

        .btn-main:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        #hasil-profil {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            display: none;
            animation: reveal 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes reveal {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.25rem;
        }

        .info-item:last-child { margin-bottom: 0; }

        .label {
            color: var(--text-secondary);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-weight: 600;
        }

        .value {
            font-size: 1rem;
            color: var(--text-primary);
        }

        .spinner-border {
            width: 1.1rem;
            height: 1.1rem;
            margin-right: 10px;
            display: none;
            vertical-align: middle;
        }
    </style>
</head>
<body>

<div class="profile-card">
    <div class="icon-circle">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        </svg>
    </div>

    <h2>Manajemen Profil</h2>
    <p class="instruction">Klik tombol di bawah untuk memuat data profil</p>

    <button id="btn-tampil" class="btn-main">
        <div class="spinner-border spinner-border-sm" role="status"></div>
        <span>Tampilkan Profil</span>
    </button>

    <div id="hasil-profil">
        <div class="info-item">
            <span class="label">Nama</span>
            <span id="p-nama" class="value">-</span>
        </div>
        <div class="info-item">
            <span class="label">Pekerjaan</span>
            <span id="p-pekerjaan" class="value">-</span>
        </div>
        <div class="info-item">
            <span class="label">Lokasi</span>
            <span id="p-lokasi" class="value">-</span>
        </div>
    </div>
</div>

<script>
    const btn = document.getElementById('btn-tampil');
    const loader = btn.querySelector('.spinner-border');
    const hasilDiv = document.getElementById('hasil-profil');

    btn.addEventListener('click', function() {
        btn.disabled = true;
        loader.style.display = 'inline-block';
        
        fetch('data.php')
            .then(response => response.json())
            .then(data => {
                // Delay kecil untuk estetika loading
                setTimeout(() => {
                    document.getElementById('p-nama').innerText = data.nama;
                    document.getElementById('p-pekerjaan').innerText = data.pekerjaan;
                    document.getElementById('p-lokasi').innerText = data.lokasi;

                    hasilDiv.style.display = 'block';
                    btn.disabled = false;
                    loader.style.display = 'none';
                }, 600);
            })
            .catch(error => {
                alert("Koneksi gagal.");
                btn.disabled = false;
                loader.style.display = 'none';
            });
    });
</script>

</body>
</html>
```

---

### Penjelasan Kode

---

### 1. PHP (`data.php`)

Bagian ini berfungsi sebagai penyedia data di sisi server. File PHP bertindak sebagai titik akhir (API) yang menyiapkan informasi profil dalam format JSON agar bisa dibaca oleh sistem lain. Kode ini mendefinisikan array asosiatif berisi data seperti nama, pekerjaan, dan lokasi, lalu menggunakan fungsi json_encode() untuk mengubah struktur data tersebut menjadi teks string JSON. Output JSON inilah yang nantinya akan ditangkap oleh logika AJAX di sisi klien.

---

### 2. HTML (`index.html`)

HTML berperan sebagai fondasi atau kerangka halaman web yang dilihat oleh pengguna. Struktur ini mendefinisikan elemen-elemen visual seperti kontainer kartu (.card), ikon avatar, judul "Manajemen Profil", dan tombol pemicu interaksi. Di dalamnya juga disiapkan elemen div kosong (seperti #hasil-profil) yang berfungsi sebagai wadah untuk menampung data yang nantinya dikirimkan oleh server. Pemisahan elemen-elemen ini memudahkan JavaScript untuk mengetahui secara presisi di mana data harus diletakkan.

---

### 3. JavaScript (AJAX)

JavaScript bertindak sebagai "otak" komunikator yang menjalankan teknologi AJAX melalui Fetch API. Skrip ini bekerja di latar belakang sehingga browser dapat berbicara dengan server tanpa perlu memuat ulang (reload) seluruh halaman. Saat tombol diklik, JavaScript menangkap instruksi tersebut, mengubah tampilan tombol menjadi mode pemuatan (loading), dan mengirim permintaan ke file data.php. Setelah mendapat respon JSON, JavaScript memprosesnya dan menyuntikkan data tersebut ke dalam struktur HTML secara dinamis.


### 4. CSS

CSS bertanggung jawab atas estetika dan tata letak agar halaman web terlihat profesional dan minimalis. Melalui CSS, kita mengatur palet warna, tipografi, dan spasi antar elemen. CSS juga menangani aspek interaktif seperti efek hover pada tombol dan animasi transisi halus saat data profil muncul di layar. Penggunaan properti seperti Glassmorphism (efek kaca transparan) dan desain responsif memastikan tampilan tetap bagus saat dibuka melalui perangkat komputer maupun ponsel.

---

### Hasil Tampilan (Screenshot)

![Hasil Tampilan](assets/1.png)
![Hasil Tampilan](assets/2.png)

---

---

## 3. Kesimpulan

Kesimpulan dari tugas Modul 10 ini adalah keberhasilan implementasi teknologi AJAX menggunakan Fetch API untuk membangun sistem manajemen profil yang interaktif dan modern. Melalui integrasi antara PHP sebagai penyedia data JSON di sisi server dan JavaScript sebagai pengolah logika di sisi klien, data profil dapat dimuat secara real-time ke dalam kerangka HTML tanpa harus melakukan pemuatan ulang halaman secara keseluruhan. Aspek visual yang dibangun menggunakan CSS dengan konsep Glassmorphism serta tipografi yang bersih memberikan pengalaman pengguna yang responsif, minimalis, dan profesional. Secara keseluruhan, tugas ini mendemonstrasikan bagaimana alur kerja pengembangan web modern menggabungkan struktur data yang efisien, komunikasi latar belakang yang cepat, dan desain antarmuka yang elegan untuk menciptakan aplikasi yang fungsional.

---

## 4. Referensi

- Modul Praktikum Aplikasi Berbasis Platform – Modul 10 AJAX  
- W3Schools AJAX Tutorial : https://www.w3schools.com/xml/ajax_intro.asp  
- W3Schools Fetch API : https://www.w3schools.com/js/js_api_fetch.asp
- Bootstrap 5 Official Docs: https://getbootstrap.com/docs/5.3/getting-started/introduction/
- JavaScript.info - Fetch: https://javascript.info/fetch
