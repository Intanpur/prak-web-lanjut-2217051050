<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$title</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Mengubah background seluruh halaman menjadi pink muda */
        body {
            background-image: url('{{ asset('assets/strawbery.jpg') }}');
           
        }

        .profile-container {
            max-width: 400px;
            margin: 50px auto;
            text-align: center;
            padding: 20px;
            background-color: #ffcccb; /* Mengganti dengan warna pink muda */
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
            background-image: url('{{ asset('assets/profile.png') }}');
            background-size: cover;
            background-position: center;
        }

        h2 {
            color: #6c757d;
        }

        .error {
            color: red; /* Mengatur warna teks menjadi merah */
            font-size: 12px; /* Ukuran font untuk pesan error */
            margin-top: 5px; /* Jarak atas dari input */
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

@yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
