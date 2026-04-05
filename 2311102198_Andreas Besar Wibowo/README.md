<div align="center">
  <br />

  <h1>LAPORAN PRAKTIKUM <br>
  APLIKASI BERBASIS PLATFORM
  </h1>

  <br />

  <h3>MODUL X <br>
 AJAX
  </h3>

  <br />

  <img src="Images/Logo Telkom.png" alt="Logo" width="300">

  <br />
  <br />
  <br />

  <h3>Disusun Oleh :</h3>

  <p>
    <strong>Andreas Besar Wibowo</strong><br>
    <strong>2311102198</strong><br>
    <strong>S1 IF-11-REG01</strong>
  </p>

  <br />

  <h3>Dosen Pengampu :</h3>

  <p>
    <strong>Dimas Fanny Hebrasianto Permadi, S.ST., M.Kom</strong>
  </p>
  
  <br />
    <h4>Asisten Praktikum :</h4>
    <strong>Apri Pandu Wicaksono </strong> <br>
    <strong>Rangga Pradarrell Fathi</strong>
  <br />

  <h3>LABORATORIUM HIGH PERFORMANCE
 <br>FAKULTAS INFORMATIKA <br>UNIVERSITAS TELKOM PURWOKERTO <br>2026</h3>
</div>

<hr>

## Dasar Teori
### 1. Apa Itu AJAX
AJAX (Asynchronous JavaScript and XML) suatu teknik pemrograman berbasis web untuk menciptakan aplikasi web interaktif. Tujuannya adalah untuk memindahkan sebagian besar interaksi pada komputer user, melakukan pertukaran data dengan server di belakang layar, sehingga halaman web tidak harus dibaca ulang secara keseluruhan setiap kali seorang pengguna melakukan perubahan. Hal ini akan meningkatkan interaktivitas, kecepatan, dan usability.

Secara umum, AJAX melibatkan dua hal yakni:
1. Objek XMLHttpRequest bawaan browser (untuk meminta data dari sebuah web server).
2. Javascript dan HTML DOM (untuk menampilkan data pada web browser). 

### 2. Cara Kerja AJAX 
Dalam aplikasinya, AJAX melakukan hal-hal berikut: 
1. Suatu event terjadi pada halaman web (seperti page loaded atau button clicked). 
2. Sebuah objek XMLHttpRequest dibuat oleh Javascript 
3. Objek XMLHttpRequest mengirimkan request kepada web server. 
4. Web server mengelola request. 
5. Web server mengirimkan response kepada client. 
6. Response dibaca oleh Javascript. 
7. Javascript melakukan perubahan pada halaman web menggunakan DOM.


### 3. Event Handling 
Pada contoh berikut, akan dilakukan perubahan halaman web menggunakan teknik AJAX. Berikut langkah-langkah yang perlu dilakukan: 

1. Pastikan PHP web server sudah berjalan dengan baik. Pada modul ini digunakan Apache web server yang terdapat pada XAMPP v3.2.2.
2. Akses folder htdocs pada local server, dan kemudian buat folder baru dengan nama seperti: ajax
3. Buat file .txt berikut yang berfungsi sebagai pengganti konten halaman web.
```html
<h1>AJAX</h1> 
<p>AJAX is not a programming language.</p> 
<p>AJAX is a technique for accessing web servers from a web page.</p> 
<p>AJAX stands for Asynchronous JavaScript And XML.</p> 
```
Simpan file sebagai ajax_info.txt. 

4. Buat juga file HTML utama yang berisikan code sebagai berikut. Dan simpan sebagai index.html

```html
<!DOCTYPE html>
<html>
<head>
    <title>jQuery AJAX Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>The jQuery AJAX</h2>
    <p id="demo">Let AJAX change this text.</p>
    <button type="button" id="changeBtn">Change Content</button>

    <script>
        $(document).ready(function() {
            $("#changeBtn").click(function() {
                $("#demo").load("ajax_info.txt");
            });
        });
    </script>

</body>
</html>
```
5. Tempatkan kedua file tersebut kedalam folder ajax yang telah dibuat pada langkah kedua
6. Ketika anda mengakses halaman web tersebut pada alamat http://localhost/ajax/
7. Namun jika anda melakukan action yaitu menekan button Change Content

Berikut adalah penjelesannya:

1. Peran terbesar AJAX pada kode di bawah ini adalah melakukan request ke server dan mengubah konten halaman tanpa perlu me-refresh browser:
```js
<script>
    $(document).ready(function() {
        $("#changeBtn").click(function() {
            $("#demo").load("ajax_info.txt");
        });
    });
 </script>
```
Code tersebut akan dieksekusi ketika halaman sudah siap (document ready) dan button dengan id "changeBtn" ditekan
2. Kode di atas menggunakan jQuery yang harus diinclude terlebih dahulu

`<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>`

3. `$(document).ready()` memastikan bahwa kode jQuery akan dijalankan setelah halaman web selesai dimuat sepenuhnya
4. Event handler `$("#changeBtn").click()` akan mendeteksi kapan tombol dengan id "changeBtn" diklik oleh user.
5. Method `.load()` akan melakukan request ke server untuk mengambil konten dari file "ajax_info.txt".

Sintaksnya:

`$("#demo").load("ajax_info.txt");`

Dimana:
- #demo: elemen yang akan diubah kontennya
- ajax_info.txt: file yang diminta dari server
6. Proses request dilakukan secara asynchronous, yang berarti
- Halaman web tetap responsif selama proses request
- User bisa melakukan interaksi lain sambil menunggu response
- Tidak ada refresh halaman saat konten diperbarui
7. Ketika server merespon dengan mengirimkan konten dari ajax_info.txt, jQuery akan otomatis mengupdate isi dari elemen dengan id="demo".

### 4. Implementasi AJAX dengan JQuery
AJAX dengan jQuery dapat diimplementasikan menggunakan metode `$.ajax()` yang menyediakan kontrol detail dalam melakukan request. Metode ini sangat berguna ketika kita membutuhkan penanganan yang lebih spesifik terhadap response dari server atau ingin menambahkan konfigurasi tambahan pada request AJAX

Berikut adalah contoh implementasi AJAX menggunakan metode `$.ajax()` :
```html
<!DOCTYPE html>
<html>
<head>
    <title>jQuery AJAX Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>The jQuery AJAX</h2>
    <p id="demo">Let AJAX change this text.</p>
    <button type="button" id="changeBtn">Change Content</button>

    <script>
        $(document).ready(function() {
            $("#changeBtn").click(function() {
                $.ajax({
                    // URL yang akan diakses
                    url: "ajax_info.txt",

                    // Metode HTTP yang digunakan (POST/GET)
                    type: "GET",

                    // Data yang dikirim ke server
                    data: {
                        id: 123,
                        name: "John"
                    },

                    // Tipe data yang diharapkan dari server
                    dataType: "html",

                    // Waktu timeout dalam milidetik (5 detik)
                    timeout: 5000,

                    // Callback ketika request berhasil
                    success: function(result) {
                        $("#demo").html(result);
                    },

                    // Callback ketika request gagal
                    error: function(xhr, status, error) {
                        $("#demo").html("Error: " + error);
                    },

                    // Callback yang selalu dijalankan setelah request selesai
                    complete: function(xhr, status) {
                        console.log("Request completed with status: " + status);
                    }
                });
            });
        });
    </script>

</body>
</html>
```
Dalam konteks jQuery AJAX ada yang dikenal sebagai **options** atau **parameter konfigurasi**. Ini adalah properti-properti yang digunakan untuk mengkonfigurasi request AJAX. Options ini memungkinkan kita untuk menentukan berbagai aspek dari request AJAX, mulai dari URL tujuan, metode yang digunakan, data yang dikirim, hingga tipe data yang diharapkan dari server. Berikut adalah penjelasan setiap **options** atau **parameter konfigurasi**:

| **Option** | **Description**                                        |
| ---------- | ------------------------------------------------------ |
| url        | Menentukan endpoint yang akan diakses                  |
| type       | Menentukan metode HTTP (GET/POST)                      |
| data       | Object berisi parameter yang akan dikirim              |
| dataType   | Menentukan tipe data response yang diharapkan          |
| timeout    | Batas waktu tunggu response dari server                |
| success    | Handler ketika request berhasil                        |
| error      | Handler ketika request gagal                           |
| complete   | Handler yang selalu dijalankan setelah request selesai |

## Tugas | Buat sebuah halaman web yang bisa mengambil data dari server lalu menampilkannya di halaman tanpa perlu reload.

### Instruksi Detail
**1. Membuat File Server (data.php)**

Buat file PHP yang berfungsi sebagai “database sederhana”.
Data cukup berupa array (misalnya: nama, pekerjaan, lokasi).

Contoh data:

['nama' => 'Budi', 'pekerjaan' => 'Web Developer', 'lokasi' => 'Jakarta']

Ubah data tersebut menjadi format JSON menggunakan json_encode().
Tampilkan hasilnya dengan echo.

Jangan lupa tambahkan header: header('Content-Type: application/json');

**2. Membuat File Client (index.html)**

Buat tombol dengan teks "Tampilkan Profil".

Siapkan tempat untuk menampilkan data, misalnya:
`<div id="hasil-profil"></div>`

**3. Membuat Logika AJAX (JavaScript)**

Tambahkan event ketika tombol diklik.

Gunakan fetch() (atau boleh pakai XMLHttpRequest / jQuery AJAX) untuk mengambil data dari data.php.

Ambil hasil response dalam bentuk JSON.

**Note**

Tampilkan data tersebut ke dalam `<div id="hasil-profil">` dengan format:

**Nama: Budi | Pekerjaan: Web Developer | Lokasi: Jakarta**

### Jawaban
**data.php**
```php
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
```
**index.html**
```html
<!-- Andreas Besar Wibowo -->
<!-- 2311102198 / IF-11-01 -->

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>AJAX Profile</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Styling -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h2 {
            margin-bottom: 20px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .card {
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
            background-color: #f8f9fa;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Data Profil</h2>

        <button onclick="tampilkanProfil()">Tampilkan Profil</button>

        <div id="hasil-profil"></div>
    </div>

    <script>
        function tampilkanProfil() {
            fetch('data.php')
                .then(response => response.json())
                .then(data => {
                    let html = '';

                    data.forEach(item => {
                        html += `
                            <p>
                                Nama: ${item.nama} | 
                                Pekerjaan: ${item.pekerjaan} | 
                                Lokasi: ${item.lokasi}
                            </p>
                        `;
                    });

                    document.getElementById('hasil-profil').innerHTML = html;
                })
                .catch(error => {
                    document.getElementById('hasil-profil').innerHTML =
                        `<p style="color:red;">Gagal mengambil data</p>`;
                });
        }
    </script>

</body>

</html>
```
### Penjelasan
**1. File Server (data.php)**
```php
header('Content-Type: application/json');

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

echo json_encode($data);
```
Penjelasan:
- `header('Content-Type: application/json')`, menentukan tipe data yang dikirim adalah JSON
- Data disimpan dalam bentuk array multidimensi
- `json_encode()` mengubah data PHP menjadi format JSON
- `echo` digunakan untuk mengirim data ke client

**2. Struktur Data JSON**
```json
[
  {
    "nama": "Budi",
    "pekerjaan": "Web Developer",
    "lokasi": "Jakarta"
  }
]
```
Penjelasan:
- Data dikirim dalam format JSON
- Setiap objek berisi:
    - nama
    - pekerjaan
    - lokasi
- Format ini memudahkan komunikasi antara server dan client

**3. Tampilan Halaman (HTML)**
```html
<button onclick="tampilkanProfil()">Tampilkan Profil</button>
<div id="hasil-profil"></div>
```
Penjelasan:
- Tombol digunakan untuk menjalankan fungsi AJAX
- `<div>` digunakan sebagai tempat menampilkan data dari server

**4. Pengambilan Data dengan Fetch API**
```js
fetch('data.php')
    .then(response => response.json())
```
Penjelasan:
- `fetch()` digunakan untuk mengambil data dari server tanpa reload halaman
- `response.json()` mengubah response menjadi objek JavaScript

**5. Perulangan Data (Loop)**
```js
data.forEach(item => {
```
Penjelasan:
- Menggunakan `forEach` untuk mengulang setiap data
- Setiap item berisi data satu profil

**6. Menampilkan Data ke HTML**
```js
html += `
    <p>
        Nama: ${item.nama} | 
        Pekerjaan: ${item.pekerjaan} | 
        Lokasi: ${item.lokasi}
    </p>
`;
```
Penjelasan:
- Data ditampilkan dalam format teks sesuai instruksi
- Menggunakan template string (`)
- Data ditampilkan secara dinamis

**7. Manipulasi DOM**
```js
document.getElementById('hasil-profil').innerHTML = html;
```
Penjelasan:
- Digunakan untuk menampilkan hasil ke halaman web
- `innerHTML` mengganti isi elemen dengan data yang sudah diproses

**8. Penanganan Error**
```js
.catch(error => {
    document.getElementById('hasil-profil').innerHTML =
        `<p style="color:red;">Gagal mengambil data</p>`;
});
```
Penjelasan:
- Digunakan jika terjadi kesalahan saat mengambil data
- Menampilkan pesan error ke user

**9. Styling (CSS)**
```css
.container {
    background: white;
    border-radius: 12px;
}
```
Penjelasan:
- Digunakan untuk memperindah tampilan
- embuat tampilan lebih modern dan rapi

### Hasil Output
![Output 1](Images/Output%201.png)
![Output 2](Images/Output%202.png)
