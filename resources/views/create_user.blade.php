@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="container bg-white p-5 rounded shadow-lg">
        <!-- Tombol Kembali ke Daftar User -->
        <a href="{{ route('user.list') }}" class="btn btn-back mb-3">Kembali ke Daftar User</a>
        
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center mb-4">Create User</h1>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" 
                       class="form-control @error('nama') input-invalid @enderror">
                @error('nama')
                    <div class="pesan-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" value="{{ old('npm') }}" 
                       class="form-control @error('npm') input-invalid @enderror">
                @error('npm')
                    <div class="pesan-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" value="{{ old('foto') }}" 
                       class="form-control @error('foto') input-invalid @enderror">
                @error('foto')
                    <div class="pesan-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="kelas_id">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="form-control @error('kelas_id') input-invalid @enderror">
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" 
                                {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <div class="pesan-error">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" value="Submit" class="btn btn-success mt-3">
        </form>
    </div>
</div>

<style>
    body {
        background-color: #e6e6fa; /* Latar belakang ungu muda */
    }

    .container {
        background-color: #ffffff; /* Warna putih untuk container */
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Bayangan abu-abu */
    }

    h1 {
        background-color: #4b0082; /* Ungu tua */
        color: #ffffff;
        padding: 10px;
        border-radius: 5px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
        color: #4b0082; /* Ungu tua untuk label */
    }

    input[type="text"], select, input[type="file"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .input-invalid {
        border-color: red; /* Tanda untuk input yang invalid */
    }

    .pesan-error {
        color: red;
        font-size: 14px;
    }

    .btn-success {
        background-color: #800080;
        border-color: #800080;
        color: white;
    }

    .btn-success:hover {
        background-color: #4b0082;
        border-color: #4b0082;
    }

    .btn-back {
        background-color: #800080; /* Warna ungu */
        border-color: #800080;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-back:hover {
        background-color: #4b0082; /* Warna ungu tua saat hover */
        border-color: #4b0082;
        color: white;
    }
</style>

@endsection
