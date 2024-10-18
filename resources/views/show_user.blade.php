@extends('layouts.app')
@section ('content')

<div class="container mt-5">
    <div class="card bg-white shadow-lg rounded p-4">
        <div class="profile-container text-center">
        <img src="{{ Storage::url('uploads/' . $user->foto) }}" alt="Profile Picture" class="profile-img">        </div>
        <div class="info mt-3">
            <h1 class="label">{{ $user->nama }}</h1>
            <h2 class="label">{{ $user->npm }}</h2>
            <h2 class="label">{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</h2>
            <a href="{{ route('user.list') }}" class="btn-kembali">Kembali ke List</a>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #e6e6fa; /* Latar belakang ungu muda */
    }

    .card {
        background-color: #ffffff; /* Warna putih untuk card */
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Bayangan putih */
        padding: 20px;
        text-align: center; /* Pusatkan teks dalam card */
    }

    .profile-container {
        display: flex; /* Menggunakan Flexbox */
        justify-content: center; /* Pusatkan konten secara horizontal */
        margin-bottom: 15px; /* Jarak bawah */
    }

    .profile-img {
        width: 150px; /* Ukuran gambar profil */
        height: 150px;
        border-radius: 50%; /* Bulatkan gambar */
        object-fit: cover; /* Menjaga rasio gambar */
    }

    .label {
        color: #800080; /* Ungu untuk label */
        margin: 5px 0;
    }

    .btn-kembali {
        background-color: #800080; /* Warna ungu untuk tombol */
        border-color: #800080;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block; /* Mengatur agar tombol teratur */
        margin-top: 15px; /* Jarak atas */
    }

    .btn-kembali:hover {
        background-color: #4b0082; /* Ungu tua saat hover */
        border-color: #4b0082;
        color: white;
    }
</style>

@endsection
