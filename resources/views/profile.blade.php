<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Mengatur tampilan halaman */
        body {
            background-image: url('{{ asset('assets/bg.jpg') }}');
        }

        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #add8e6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .profile-avatar {
            width: 150px;
            height: 150px;
            background-color: #f1f1f1;
            border-radius: 50%;
            margin-bottom: 20px;
            display: inline-block;
            background-image: url('{{ asset("assets/intancantik.png") }}');
            background-size: cover;
            background-position: center;
        }

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

        .btn-custom {
            background-color: #ff6b6b;
            color: white;
        }

        .btn-custom:hover {
            background-color: #ff4757;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <!-- Gambar Profil -->
        <div class="profile-avatar"></div>
        
        <h2>Profile Form</h2>
        
        <!-- Card Nama dengan border merah -->
        <div class="card card-nama mb-3">
            <div class="card-body">
                <h5 class="card-title">Nama: {{ $nama }}</h5>
            </div>
        </div>

        <!-- Card Kelas dengan border ungu -->
        <div class="card card-kelas mb-3">
            <div class="card-body">
                <h5 class="card-title">Kelas: {{ $kelas }}</h5>
            </div>
        </div>

        <!-- Card NPM dengan border biru -->
        <div class="card card-npm mb-3">
            <div class="card-body">
                <h5 class="card-title">NPM: {{ $npm }}</h5>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
