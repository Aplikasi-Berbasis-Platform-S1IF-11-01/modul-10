document.getElementById("btnProfil").addEventListener("click", function() {
    fetch("data.php")
        .then(response => response.json())
        .then(data => {
            document.getElementById("hasil-profil").innerHTML =
                "Nama: " + data.nama +
                " | Pekerjaan: " + data.pekerjaan +
                " | Lokasi: " + data.lokasi;
        })
        .catch(error => {
            document.getElementById("hasil-profil").innerHTML =
                "Terjadi kesalahan saat mengambil data.";
            console.log(error);
        });
});