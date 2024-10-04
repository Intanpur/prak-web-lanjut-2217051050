<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
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
            background-image: url('{{ asset('assets/profile.png') }}');
            background-size: cover;
            background-position: center;
        }

        h2 {
            color: #6c757d;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
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
        <div class="profile-avatar" style="background-image: url('{{ asset('pp.jpg') }}');"></div>
        <h2>Profile Form</h2>
        <form action="{{ route('user.store') }}" method="post" novalidate>
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">First Name:</label>
                <input type="text" id="nama" name="nama" class="form-control">
                @foreach ($errors->get('nama') as $msg)
                    <p class="error">{{ $msg }}</p>
                @endforeach
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM:</label>
                <input type="text" id="npm" name="npm" class="form-control">
                @foreach ($errors->get('npm') as $msg)
                    <p class="error">{{ $msg }}</p>
                @endforeach
            </div>
            <div class="mb-3">
                <label for="id_kelas" class="form-label">Kelas:</label>
                <select name="kelas_id" id="kelas_id" required>
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
                @foreach ($errors->get('kelas_id') as $msg)
                    <p class="error">{{ $msg }}</p>
                @endforeach
            </div>
            <button type ="submit" class="btn btn-custom">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
