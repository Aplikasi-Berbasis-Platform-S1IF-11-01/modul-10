<div align="center">

# LAPORAN PRAKTIKUM
# APLIKASI BERBASIS PLATFORM

---

## MODUL 10
## AJAX

---

<img src="Logo_Telkom.png" width="200">

---

**Disusun Oleh :**

**RELI GITA NURHIDAYATI**

**2311102025**

**S1 IF-11-REG01**

---

**Dosen Pengampu :**

Dimas Fanny Hebrasianto Permadi, S.ST., M.Kom

---

**Asisten Praktikum :**

Apri Pandu Wicaksono

Rangga Pradarrell Fathi

---

**LABORATORIUM HIGH PERFORMANCE**

**FAKULTAS INFORMATIKA**

**UNIVERSITAS TELKOM PURWOKERTO**

**2026**

</div>

---

## 1. Dasar Teori

**AJAX** (Asynchronous JavaScript and XML) adalah teknik pengembangan web yang memungkinkan halaman web untuk berkomunikasi dengan server secara asynchronous tanpa harus melakukan reload seluruh halaman. Dengan AJAX, data dapat dikirim dan diterima dari server di balik layar, sehingga pengalaman pengguna menjadi lebih cepat dan responsif.

Beberapa konsep yang digunakan dalam modul ini:
- **Fetch API** — antarmuka JavaScript modern untuk melakukan HTTP request secara asynchronous ke server, menggantikan XMLHttpRequest yang lebih lama.
- **PHP sebagai Backend** — script PHP digunakan untuk memproses request dari client dan mengembalikan data dalam format JSON menggunakan fungsi `json_encode()`.
- **JSON (JavaScript Object Notation)** — format pertukaran data ringan yang mudah dibaca oleh manusia maupun mesin, digunakan sebagai media komunikasi antara frontend dan backend.
- **Promise (.then/.catch)** — mekanisme penanganan operasi asynchronous di JavaScript untuk memproses response yang berhasil maupun menangani error.

---

## 2. Source Code

### data.php
```php
<?php
header('Content-Type: application/json');

$profil = [
    ['nama' => 'Reli Gita Nurhidayati', 'pekerjaan' => 'Data Analyst',  'lokasi' => 'Purwokerto'],
    ['nama' => 'TEST 1',                'pekerjaan' => 'UI/UX Designer', 'lokasi' => 'Jakarta'],
    ['nama' => 'TEST 2',                'pekerjaan' => 'Web Developer',  'lokasi' => 'Bandung'],
];

echo json_encode($profil);
?>
```

### index.html
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Modul 10 - Ajax</title>
</head>
<body>

<button onclick="tampilkanProfil()">Tampilkan Profil</button>
<div id="hasil-profil"></div>

<script>
    function tampilkanProfil() {
        const hasil = document.getElementById('hasil-profil');
        hasil.innerHTML = '<p>Mengambil data...</p>';

        fetch('data.php')
            .then(response => response.json())
            .then(data => {
                hasil.innerHTML = '';
                data.forEach(profil => {
                    hasil.innerHTML += `
                        <div>
                            <b>${profil.nama}</b><br>
                            Pekerjaan: ${profil.pekerjaan} | Lokasi: ${profil.lokasi}
                        </div>
                    `;
                });
            })
            .catch(error => {
                hasil.innerHTML = '<p>Gagal mengambil data</p>';
            });
    }
</script>
</body>
</html>
```

---

## 3. Penjelasan Kode

### data.php
File ini berfungsi sebagai **endpoint API** yang menyediakan data dalam format JSON. Header `Content-Type: application/json` ditetapkan agar browser mengenali response sebagai JSON. Data profil disimpan dalam array asosiatif PHP yang kemudian dikonversi menjadi JSON menggunakan `json_encode()` dan dikirim ke client.

### index.html
File ini merupakan tampilan utama yang berisi:
- **Tombol** — memicu fungsi `tampilkanProfil()` saat diklik
- **Fetch API** — melakukan HTTP GET request ke `data.php` secara asynchronous tanpa reload halaman
- **Promise Chain** — `.then()` pertama mengkonversi response menjadi JSON, `.then()` kedua melakukan iterasi data menggunakan `forEach()` dan merender setiap profil ke dalam card HTML
- **Error Handling** — `.catch()` menangkap error jika request gagal dan menampilkan pesan kepada pengguna

---

## 4. Hasil

<div align="center">
  <img src="SS TUGAS 10.png" width="700">
</div>