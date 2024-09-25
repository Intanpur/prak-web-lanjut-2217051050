<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
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
        <!-- Avatar profile yang menggunakan gambar dari public/assets/profile.png -->
        <div class="profile-avatar"></div>
        <h2>Profile Form</h2>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">First Name:</label>
                <input type="text" id="nama" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM:</label>
                <input type="text" id="npm" name="npm" class="form-control">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas:</label>
                <input type="text" id="kelas" name="kelas" class="form-control">
            </div>
            <button type="submit" class="btn btn-custom">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
