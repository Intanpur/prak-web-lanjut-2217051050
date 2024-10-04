@extends('layouts.app')
@section ('content')

<div class="container mt-5">
    <h2 class="text-center mb-4 text-white">Daftar Mahasiswa</h2>
    <table class="table table-striped table-bordered table-hover bg-light">
        <thead class="bg-primary text-white">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
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
                    <td>
                        <a href="#" class="btn btn-success btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<style>
    body {
        background-color: #f8f9fa; /* Latar belakang halus untuk seluruh halaman */
    }

    h2 {
        background-color: #007bff; /* Biru sesuai tema Bootstrap */
        padding: 15px;
        border-radius: 5px;
    }

    table {
        border-radius: 10px;
        overflow: hidden;
    }

    th {
        background-color: #0056b3 !important; /* Warna biru yang lebih gelap untuk header */
    }

    tr:hover {
        background-color: #f1f1f1; /* Efek hover pada baris tabel */
    }
</style>

@endsection
