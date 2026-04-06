<div align="center">
  <br />
  <h1>LAPORAN PRAKTIKUM <br>APLIKASI BERBASIS PLATFORM</h1>
  <br />
  <h3>MODUL 10 <br> AJAX  </h3>
  <br />
  <img src="assets\Logo_Telkom_University_potrait.png" alt="Logo" width="300"> 
  <br />
  <br />
  <br />
  <h3>Disusun Oleh :</h3>
  <p>
    <strong>ARJUN WERDHO KUMORO</strong><br>
    <strong>2311102009strong><br>
    <strong>IF-11-REG01</strong>
  </p>
  <br />
  <h3>Dosen Pengampu :</h3>
  <p>
    <strong>Dimas Fanny Hebrasianto Permadi, S.ST., M.Kom</strong>
  </p>
  <br />
  <br />
    <h4>Asisten Praktikum :</h4>
    <strong> Apri Pandu Wicaksono </strong> <br>
    <strong>Rangga Pradarrell Fathi</strong>
  <br />
  <h3>LABORATORIUM HIGH PERFORMANCE
 <br>FAKULTAS INFORMATIKA <br>UNIVERSITAS TELKOM PURWOKERTO <br>2026</h3>
</div>


---
## 1 CODE PHP
**Code :**
```
<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$profil = [
    ['nama' => 'Arjun', 'pekerjaan' => 'Jualan Cilok', 'lokasi' => 'Purbalingga'],
    ['nama' => 'Werdho', 'pekerjaan' => 'Jualan Duren', 'lokasi' => 'Kalimanah Wetan'],
    ['nama' => 'Kumoro', 'pekerjaan' => 'Jualan Pancake Durian', 'lokasi' => 'Jawa Tengah'],
];

echo json_encode($profil);
?>
```


## 2 Code HTML
**Code :**

```
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>AJAX Arjun Werdho Kumoro 2311102009</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(135deg, #1d2b64, #f8cdda);
    min-height: 100vh;
    font-family: 'Segoe UI', sans-serif;
}

/* Glass effect */
.glass {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 20px;
    color: white;
}

/* Card */
.card-profil {
    border-radius: 20px;
    padding: 20px;
    transition: 0.4s;
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(8px);
}

/* Hover efek */
.card-profil:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 15px 30px rgba(0,0,0,0.3);
}

/* Animasi muncul */
.fade-in {
    animation: fadeInUp 0.8s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Tombol keren */
.btn-custom {
    background: #ffcc00;
    border: none;
    font-weight: bold;
    border-radius: 30px;
    padding: 10px 25px;
    transition: 0.3s;
}

.btn-custom:hover {
    background: #ffaa00;
    transform: scale(1.05);
}
</style>

</head>

<body>

<div class="container mt-5">

    <!-- Header -->
    <div class="glass text-center mb-4">
        <h1>🚀 Data Penjual Modern</h1>
        <p>Klik tombol untuk menampilkan data tanpa reload (AJAX)</p>
        <button class="btn btn-custom mt-2" onclick="tampilkanProfil()">
            Tampilkan Profil
        </button>
    </div>

    <!-- Data -->
    <div class="row" id="hasil-profil">
        <h5 class="text-center text-white">Klik tombol dulu 👆</h5>
    </div>

</div>

<script>
function tampilkanProfil() {

    // loading
    document.getElementById("hasil-profil").innerHTML =
        "<p class='text-center text-white'>⏳ Loading data...</p>";

    fetch('FileServerData.php')
        .then(res => res.json())
        .then(data => {
            let output = "";

            data.forEach((item, index) => {
                output += `
                <div class="col-md-4 mb-4 fade-in">
                    <div class="card-profil text-white">
                        <h3>👤 ${item.nama}</h3>
                        <p>💼 <b>${item.pekerjaan}</b></p>
                        <p>📍 ${item.lokasi}</p>
                    </div>
                </div>
                `;
            });

            document.getElementById("hasil-profil").innerHTML = output;
        })
        .catch(err => {
            document.getElementById("hasil-profil").innerHTML =
                "<p class='text-danger text-center'>❌ Gagal ambil data</p>";
            console.log(err);
        });
}
</script>

</body>
</html>
```


---
## 3. OUTPUT
![Hasilnya](assets\SS1.png)

![Hasilnya](assets\SS2.png)

---
## 3. Penjelasan

Program ini merupakan implementasi teknologi AJAX (Asynchronous JavaScript and XML) yang digunakan untuk mengambil data dari server tanpa perlu melakukan reload halaman. Pada bagian server, digunakan file data.php yang berfungsi sebagai penyedia data. Data disimpan dalam bentuk array yang berisi beberapa profil seperti nama, pekerjaan, dan lokasi. Data tersebut kemudian dikonversi ke format JSON menggunakan fungsi json_encode(), serta ditambahkan header Content-Type: application/json agar dapat dibaca dengan baik oleh JavaScript di sisi client.

Pada sisi client, yaitu file index.html, digunakan JavaScript dengan fungsi fetch() untuk melakukan request ke server secara asynchronous. Ketika tombol "Tampilkan Profil" diklik, fungsi tampilkanProfil() akan dijalankan dan mengirim permintaan ke file data.php. Data yang diterima dalam bentuk JSON kemudian diolah dan ditampilkan secara dinamis ke dalam halaman HTML tanpa melakukan refresh. Hal ini menunjukkan bahwa komunikasi antara client dan server berjalan secara real-time dan efisien.

Selain itu, tampilan antarmuka dibuat lebih modern dengan menggunakan framework Bootstrap serta tambahan CSS seperti efek glassmorphism, animasi hover, dan animasi fade-in. Data ditampilkan dalam bentuk card yang interaktif sehingga meningkatkan pengalaman pengguna (user experience). Dengan adanya efek loading dan animasi, aplikasi terlihat lebih responsif dan profesional.

Secara keseluruhan, program ini telah memenuhi konsep dasar AJAX, yaitu mengambil data dari server, memprosesnya di client menggunakan JavaScript, dan menampilkan hasilnya tanpa reload halaman. Implementasi ini membuat aplikasi web menjadi lebih cepat, interaktif, dan user-friendly dibandingkan metode tradisional yang memerlukan reload setiap kali mengambil data.
