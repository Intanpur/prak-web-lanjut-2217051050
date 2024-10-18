@extends('layouts.app')
@section ('content')

<div class="content-wrapper">
    <div class="container mt-5">
        <!-- Bagian Judul dan Tombol -->
        <h2 class="text-center text-white mb-4">Daftar Mahasiswa</h2>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('user.create') }}" class="btn btn-success">Tambah User</a>
        </div>

        <!-- Container putih dengan bayangan untuk tabel -->
        <div class="container p-4 bg-white shadow-lg rounded">
            <table class="table table-striped table-bordered table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($kelas as $user) {
                    ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nama'] ?></td>
                            <td><?= $user['npm'] ?></td>
                            <td><?= $user['nama_kelas'] ?></td>
                            <td><img src="{{ Storage::url('uploads/' . $user->foto) }}" alt="Profile Picture" class="profile-img" width="50" height="50"></td> <!-- Ukuran foto diatur -->
                            <td>
                                <a href="{{ route('user.show', $user['id']) }}" class="btn btn-success btn-sm">View</a>
                                <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-primary btn-sm">Edit</a> <!-- Warna tombol Edit diubah menjadi biru -->
                                <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button> <!-- Tombol Delete berwarna merah -->
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #e6e6fa; /* Latar belakang ungu muda */
    }

    h2 {
        background-color: #4b0082; /* Ungu tua */
        padding: 15px;
        border-radius: 5px;
    }

    .container {
        background-color: #ffffff; /* Warna putih untuk container */
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Bayangan abu-abu */
    }

    .table {
        background-color: #ffffff; /* Warna putih untuk tabel */
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan abu-abu */
    }

    th {
        background-color: #800080 !important; /* Warna ungu untuk header tabel */
        color: #ffffff; /* Teks putih */
    }

    td {
        background-color: #f8f8ff; /* Warna ungu sangat muda untuk baris tabel */
    }

    tr:hover {
        background-color: #dcdcdc; /* Efek hover abu-abu terang */
    }

    .btn-container {
        text-align: left; /* Tombol di sebelah kiri */
        margin-bottom: 15px;
    }

    .btn-success {
        background-color: #800080;
        border-color: #800080;
    }

    .btn-success:hover {
        background-color: #4b0082;
        border-color: #4b0082;
    }

    /* Gaya untuk tombol Edit dan Delete */
    .btn-primary {
        background-color: #007bff; /* Warna biru untuk tombol Edit */
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545; /* Warna merah untuk tombol Delete */
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2131;
    }
</style>

@endsection
