<div align="center">
  <br>

  <h1>LAPORAN PRAKTIKUM <br>
  APLIKASI BERBASIS PLATFORM
  </h1>

  <br>

  <h3>MODUL 10 <br>
  AJAX
  </h3>

  <br>

  <img src="asset/telyu.png" />



  <br>
  <br>
  <br>

  <h3>Disusun Oleh :</h3>

  <p>
    <strong>Irshad Benaya Fardeca</strong><br>
    <strong>2311102199</strong><br>
    <strong>S1 IF-11-REG01</strong>
  </p>

  <br>

  <h3>Dosen Pengampu :</h3>

  <p>
    <strong>Dimas Fanny Hebrasianto Permadi, S.ST., M.Kom</strong>
  </p>
  
  <br>
  <br>
    <h4>Asisten Praktikum :</h4>
    <strong>Apri Pandu Wicaksono </strong> <br>
    <strong>Rangga Pradarrell Fathi</strong>
  <br>

  <h3>LABORATORIUM HIGH PERFORMANCE
 <br>FAKULTAS INFORMATIKA <br>UNIVERSITAS TELKOM PURWOKERTO <br>2026</h3>
</div>
<hr>

# Dasar Teori
## 10.1 Apa Itu AJAX
AJAX (Asynchronous JavaScript and XML) suatu teknik pemrograman berbasis web untuk menciptakan 
aplikasi web interaktif. Tujuannya adalah untuk memindahkan sebagian besar interaksi pada komputer user, 
melakukan pertukaran data dengan server di belakang layar, sehingga halaman web tidak harus dibaca 
ulang secara keseluruhan setiap kali seorang pengguna melakukan perubahan. Hal ini akan meningkatkan 
interaktivitas, kecepatan, dan usability. 
Secara umum, AJAX melibatkan dua hal yakni: 
1. Objek XMLHttpRequest bawaan browser (untuk meminta data dari sebuah web server). 
2. Javascript dan HTML DOM (untuk menampilkan data pada web browser). 

## 10.2. Cara Kerja AJAX
<img src="asset/ajax.gif">
Dalam aplikasinya, AJAX melakukan hal-hal berikut: 
1. Suatu event terjadi pada halaman web (seperti page loaded atau button clicked). 
2. Sebuah objek XMLHttpRequest dibuat oleh Javascript 
3. Objek XMLHttpRequest mengirimkan request kepada web server. 
4. Web server mengelola request. 
5. Web server mengirimkan response kepada client. 
6. Response dibaca oleh Javascript. 
7. Javascript melakukan perubahan pada halaman web menggunakan DOM. 

## 10.3. Event Handling
Pada contoh berikut, akan dilakukan perubahan halaman web menggunakan teknik AJAX. Berikut langkah-langkah yang perlu dilakukan: 
1. Pastikan PHP web server sudah berjalan dengan baik. Pada modul ini digunakan Apache web server
yang terdapat pada XAMPP v3.2.2.
2. Akses folder htdocs pada local server, dan kemudian buat folder baru dengan nama seperti: ajax
3. Buat file .txt berikut yang berfungsi sebagai pengganti konten halaman web.
```
h1>AJAX</h1>
<p>AJAX is not a programming language.</p>
<p>AJAX is a technique for accessing web servers from a web
    page.</p>
<p>AJAX stands for Asynchronous JavaScript And XML.</p>
```
4. Buat juga file HTML utama yang berisikan code sebagai berikut. Dan simpan sebagai index.html
```
<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h2>The jQuery AJAX</h2>
    <p id="demo">Let AJAX change this text.</p>
    <button type="button" id="changeBtn">Change Content</button>
    <script>
        $(document).ready(function () {
            $("#changeBtn").click(function () {
                $("#demo").load("ajax_info.txt");
            });
        });
    </script>
</body>

</html>
```
5. Tempatkan kedua file tersebut kedalam folder ajax yang telah dibuat pada langkah kedua sehingga 
posisi kedua file berada folder yang sama. 
6. Ketika anda mengakses halaman web tersebut pada alamat http://localhost/ajax/, tampilan yang 
akan muncul adalah seperti gambar.
<img src="asset/g1.png">
8. Namun jika anda melakukan action yaitu menekan button Change Content, maka konten pada 
halaman web akan menjadi seperti ini.
<img src="asset/g2.png">

Berikut adalah penjelesannya: 
1. Peran terbesar AJAX pada kode di bawah ini adalah melakukan request ke server dan mengubah 
konten halaman tanpa perlu me-refresh browser
```javascript
<script>
    $(document).ready(function () {
        $("#changeBtn").click(function () {
            $("#demo").load("ajax_info.txt");
        });
    });
</script>
```
Code tersebut akan dieksekusi ketika halaman sudah siap (document ready) dan button dengan id 
"changeBtn" ditekan.

2. Kode di atas menggunakan jQuery yang harus diinclude terlebih dahulu:
```javascript
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
```
3. ```$(document).ready()``` memastikan bahwa kode jQuery akan dijalankan setelah halaman web selesai 
dimuat sepenuhnya.
4. Event handler ```$("#changeBtn").click()``` akan mendeteksi kapan tombol dengan id "changeBtn" diklik 
oleh user. 
5. Method .load() akan melakukan request ke server untuk mengambil konten dari file "ajax_info.txt". 
Sintaksnya:
```$("#demo").load("ajax_info.txt");```
Dimana:
  • #demo: elemen yang akan diubah kontennya
  • ajax_info.txt: file yang diminta dari server
6. Proses request dilakukan secara asynchronous, yang berarti:
  • Halaman web tetap responsif selama proses request
  • User bisa melakukan interaksi lain sambil menunggu response
  • Tidak ada refresh halaman saat konten diperbarui
7. Ketika server merespon dengan mengirimkan konten dari ajax_info.txt, jQuery akan otomatis 
mengupdate isi dari elemen dengan id="demo". 

## 10.4. Implementasi AJAX dengan JQuery
AJAX dengan jQuery dapat diimplementasikan menggunakan metode $.ajax() yang menyediakan kontrol 
detail dalam melakukan request. Metode ini sangat berguna ketika kita membutuhkan penanganan yang 
lebih spesifik terhadap response dari server atau ingin menambahkan konfigurasi tambahan pada request 
AJAX.
Berikut adalah contoh implementasi AJAX menggunakan metode $.ajax()
```html
!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h2>The jQuery AJAX</h2>
    <p id="demo">Let AJAX change this text.</p>
    <button type="button" id="changeBtn">Change Content</button>
    <script>
        $(document).ready(function () {
            $("#changeBtn").click(function () {
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
                    success: function (result) {
                        $("#demo").html(result);
                    },
                    // Callback ketika request gagal
                    error: function (xhr, status, error) {
                        $("#demo").html("Error: " + error);
                    },
                    // Callback yang selalu dijalankan setelah request selesai
                    complete: function (xhr, status) {
                        console.log("Request completed with status: " + status);
                    }
                });
            });
        });
    </script>
</body>

</html>
```

Dalam konteks jQuery AJAX ada yang dikenal sebagai options atau parameter konfigurasi. Ini adalah 
properti-properti yang digunakan untuk mengkonfigurasi request AJAX. Options ini memungkinkan kita 
untuk menentukan berbagai aspek dari request AJAX, mulai dari URL tujuan, metode yang digunakan, data 
yang dikirim, hingga tipe data yang diharapkan dari server. Berikut adalah penjelasan setiap options atau 
parameter konfigurasi:
| Option | Description |
| :--- | :--- |
| **url** | Menentukan endpoint yang akan diakses |
| **type** | Menentukan metode HTTP (GET/POST) |
| **data** | Object berisi parameter yang akan dikirim |
| **dataType** | Menentukan tipe data response yang diharapkan |
| **timeout** | Batas waktu tunggu response dari server |
| **success** | Handler ketika request berhasil |
| **error** | Handler ketika request gagal |
| **complete** | Handler yang selalu dijalankan setelah request selesai |


# Tugas
## 1. *Tugas Modul 10 - Ajax*

Buat sebuah halaman web yang bisa mengambil data dari server lalu menampilkannya di halaman tanpa perlu reload.

*Instruksi Detail:*
1. *Membuat File Server* (data.php)
Buat file PHP yang berfungsi sebagai “database sederhana”.
Data cukup berupa array (misalnya: nama, pekerjaan, lokasi).
Contoh data:

['nama' => 'Budi', 'pekerjaan' => 'Web Developer', 'lokasi' => 'Jakarta']
Ubah data tersebut menjadi format JSON menggunakan json_encode().
Tampilkan hasilnya dengan echo.

Jangan lupa tambahkan header:
header('Content-Type: application/json');

2. *Membuat File Client* (index.html)
Buat tombol dengan teks "Tampilkan Profil".
Siapkan tempat untuk menampilkan data, misalnya:
<div id="hasil-profil"></div>
3. *Membuat Logika AJAX (JavaScript)*
Tambahkan event ketika tombol diklik.
Gunakan fetch() (atau boleh pakai XMLHttpRequest / jQuery AJAX) untuk mengambil data dari data.php.
Ambil hasil response dalam bentuk JSON.

Tampilkan data tersebut ke dalam <div id="hasil-profil"> dengan format:
*Nama: Budi | Pekerjaan: Web Developer | Lokasi: Jakarta*

## Source Code
Kode ini mendemonstrasikan pengambilan data secara asinkron dari server menggunakan JavaScript Fetch API tanpa memuat ulang (reload) seluruh halaman web.

### 1. Data (`data.php`)
```php
<?php
header('Content-Type: application/json');

$profil = [
    'nama' => "Irshad Benaya Fardeca",
    'nim' => "2311102199",
    'kelas' => "IF-11-01"
];

echo json_encode($profil);
```
Berfungsi sebagai API Endpoint sederhana.
* **Fungsi**: Mengubah array asosiatif PHP menjadi format JSON.
* **Header**: Menggunakan `application/json` untuk memastikan kompatibilitas pertukaran data.
* **Data**: Nama, NIM, dan Kelas.

### 2. Client Side (`index.html`)
```html
<body>
    <div class="wrap">
        <h1>Profil</h1>
        <button onclick="dataProfil()">Tampilkan Profil</button>
        <div id="hasil-profil"></div>
    </div>

    <script>
        function dataProfil() {
            fetch('data.php')
                .then(response => response.json())
                .then(data => {
                    let output = `
                        <div class="profil-card">
                            <div class="profil-row">
                                <span class="profil-label">Nama</span>
                                <span class="profil-value">${data.nama}</span>
                            </div>
                            <div class="profil-row">
                                <span class="profil-label">NIM</span>
                                <span class="profil-value">${data.nim}</span>
                            </div>
                            <div class="profil-row">
                                <span class="profil-label">Kelas</span>
                                <span class="profil-value">${data.kelas}</span>
                            </div>
                        </div>
                    `;
                    document.getElementById("hasil-profil").innerHTML = output;
                })
                .catch(error => {
                    console.error("Error:", error);
                });
        }
    </script>
</body>
```
Berfungsi sebagai antarmuka pengguna (UI).
* **Styling**: Menggunakan CSS Flexbox untuk memusatkan kartu profil di tengah layar.
* **Interaksi**: Event listener pada tombol memicu fungsi asinkron.
* **DOM Manipulation**: Menggunakan `document.getElementById` dan `innerHTML` untuk menyuntikkan data hasil fetch ke dalam elemen target.

## Output
<img src="asset/g3.png">
<img src="asset/g4.png">