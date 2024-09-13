<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Border Styles */
        .card-nama {
            border: 2px solid #ff0000; /* Merah */
        }
        .card-kelas {
            border: 2px solid #800080; /* Ungu */
        }
        .card-npm {
            border: 2px solid #007bff; /* Biru */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <!-- Gambar Profil -->
                <img src="pp1.jpg" class="rounded-circle mb-3" alt="Profile Picture">

                <!-- Card Nama dengan border biru -->
                <div class="card card-nama mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Nama: {{ $nama }}</h5>
                    </div>
                </div>

                <!-- Card Kelas dengan border hijau -->
                <div class="card card-kelas mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Kelas: {{ $kelas }}</h5>
                    </div>
                </div>

                <!-- Card NPM dengan border kuning -->
                <div class="card card-npm mb-2">
                    <div class="card-body">
                        <h5 class="card-title">NPM: {{ $npm }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
