@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded p-4">
        @csrf
        @method('PUT')

        <!-- Judul dan Button List User -->
        <h1 class="text-center text-purple">Input Data</h1>
        <div class="text-left mb-3">
            <a href="{{ route('user.list') }}" class="btn-list-user">List User</a>
        </div>

        <div class="konten-2">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}" placeholder="Nama anda">
        </div>

        <div class="konten-2">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" name="npm" id="npm" value="{{ old('npm', $user->npm) }}" placeholder="NPM anda">
        </div>

        <div class="konten-2">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" name="kelas_id" id="kelas_id">
                @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="konten-2">
            <label for="foto" class="form-label">Foto</label>
            <input class="form-control" type="file" id="foto" name="foto">
            @if ($user->foto)
            <img src="{{ Storage::url('uploads/' . $user->foto) }}" alt="Profile Picture" class="profile-img">            @endif
        </div>

        <button type="submit" class="btn-submit">Submit</button>
        <a href="{{ route('user.list') }}" class="btn-kembali">Kembali</a>
    </form>
</div>

<style>
    body {
        background-color: #e6e6fa; /* Latar belakang ungu muda */
    }

    .container {
        max-width: 600px; /* Lebar maksimal container */
        margin: auto; /* Tengah */
    }

    .bg-white {
        background-color: #ffffff; /* Warna putih untuk form */
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Bayangan putih */
        padding: 20px;
    }

    h1.text-purple {
        color: #800080; /* Ungu untuk judul */
        margin-bottom: 20px; /* Jarak bawah untuk judul */
    }

    .btn-list-user {
        background-color: #800080; /* Warna ungu untuk tombol */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none; /* Hapus garis bawah untuk tautan */
    }

    .btn-list-user:hover {
        background-color: #4b0082; /* Ungu tua saat hover */
    }

    .konten-2 {
        margin-bottom: 15px; /* Jarak antar elemen */
    }

    .form-label {
        font-weight: bold; /* Cetak tebal untuk label */
        color: #800080; /* Warna ungu untuk label */
    }

    .form-control {
        border: 1px solid #800080; /* Garis tepi ungu untuk input */
    }

    .form-select {
        border: 1px solid #800080; /* Garis tepi ungu untuk select */
    }

    .btn-submit, .btn-kembali {
        background-color: #800080; /* Warna ungu untuk tombol */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none; /* Hapus garis bawah untuk tautan */
        display: inline-block; /* Agar tombol tampil dalam baris */
        margin-top: 15px; /* Jarak atas */
    }

    .btn-submit:hover, .btn-kembali:hover {
        background-color: #4b0082; /* Ungu tua saat hover */
    }

    .profile-img {
        width: 100px; /* Ukuran gambar profil */
        height: 100px; /* Ukuran gambar profil */
        border-radius: 50%; /* Bulatkan gambar */
        object-fit: cover; /* Menjaga rasio gambar */
    }
</style>

@endsection
