<!-- 2311102191 -->
<!-- FAHREZA ILHAM WICAKSONO -->
<!-- 👍🏿 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>

    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='80'>🎓</text></svg>">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .profile-card {
            transition: 0.3s;
        }

        .profile-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white text-center">
                <h3 class="mb-0">
                    <i class="fas fa-user-circle me-2"></i>Profil Pengguna
                </h3>
            </div>

            <div class="card-body text-center">
                <button id="btn-load" class="btn btn-primary px-4">
                    <i class="fas fa-download me-2"></i>Tampilkan Profil
                </button>

                <div id="loading" class="mt-4 d-none">
                    <div class="spinner-border text-primary" role="status"></div>
                    <p class="mt-2 text-muted">Memuat data...</p>
                </div>

                <div id="hasil-profil" class="row mt-4 g-3"></div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $("#btn-load").click(function() {
            $("#hasil-profil").html("");
            $("#loading").removeClass("d-none");

            $.ajax({
                url: "data.php",
                method: "GET",
                dataType: "json",

                success: function(data) {
                    let output = "";

                    if (data.length === 0) {
                        output = `
                                <div class="col-12">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Tidak ada data
                                    </div>
                                </div>
                            `;
                    } else {
                        $.each(data, function(index, item) {
                            output += `
                                <div class="col-md-6 col-lg-4">
                                    <div class="card profile-card shadow-sm border border-primary-subtle h-100 p-2">
                                        <div class="card-body text-start">
                                            <h5 class="fw-bold">
                                                <i class="fas fa-user text-primary me-2"></i>
                                                ${item.name}
                                            </h5>

                                            <p class="mb-1">
                                                <i class="fas fa-briefcase text-success me-2"></i>
                                                ${item.job}
                                            </p>

                                            <p class="mb-0 text-muted">
                                                <i class="fas fa-map-marker-alt text-danger  me-2"></i>
                                                ${item.address}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            `;
                        });
                    }

                    setTimeout(() => {
                        $("#loading").addClass("d-none");
                        $("#hasil-profil").hide().html(output).fadeIn(300);
                    }, 300);
                },

                error: function() {
                    $("#loading").addClass("d-none");

                    $("#hasil-profil").html(`
                        <div class="col-12">
                            <div class="alert alert-danger">
                                <i class="fas fa-times-circle"></i> Gagal mengambil data dari server
                            </div>
                        </div>
                    `);
                }
            });
        });
    });
</script>

</html>