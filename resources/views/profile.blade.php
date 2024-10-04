<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Mengubah background seluruh halaman menjadi biru tua */
        body {
            background-color: #00008b; /* Warna biru tua */
        }

        .profile-container {
            max-width: 400px;
            margin: 50px auto;
            text-align: center;
            padding: 20px;
            background-color: #add8e6; /* Warna biru muda */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            background-color: #f1f1f1;
            border-radius: 50%;
            margin-bottom: 15px;
            display: inline-block;
            background-image: url('{{ asset('pp1.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        h2 {
            color: #6c757d;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 10px;
            text-align: left;
        }

        .card-title {
            font-size: 18px;
            color: #333;
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
        <div class="profile-avatar"></div>
        <h2>User Profile</h2>

        <!-- Card Nama -->
        <div class="card">
            <h5 class="card-title">Nama: {{ $nama }}</h5>
        </div>

        <!-- Card Kelas -->
        <div class="card">
            <h5 class="card-title">Kelas: {{ $kelas }}</h5>
        </div>

        <!-- Card NPM -->
        <div class="card">
            <h5 class="card-title">NPM: {{ $npm }}</h5>
        </div>

        <button class="btn btn-custom">Edit Profile</button>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
