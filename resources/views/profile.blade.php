@extends('layouts.app')

@section('content')
<div class="bg-cover bg-center backdrop-blur-sm h-screen" style="background-image: url('{{ asset('assets/img/bg-city.jpg') }}');">
    <div class="container d-flex justify-content-center align-items-center h-100">
        <div class="col-md-6 text-center">
            <!-- Profile Image -->
            <img src="{{ asset('upload/img/' . $user->foto) }}" class="rounded-circle mb-3" alt="Profile Picture" width="100" height="100">

            <!-- Name Card with Red Border -->
            <div class="card card-nama mb-2">
                <div class="card-body">
                    <h5 class="card-title">Nama: {{ $user->nama }}</h5>
                </div>
            </div>

            <!-- Class Card with Purple Border -->
            <div class="card card-kelas mb-2">
                <div class="card-body">
                    <h5 class="card-title">Kelas: {{ $nama_kelas ?? 'Kelas Tidak Ditemukan' }}</h5>
                </div>
            </div>

            <!-- NPM Card with Blue Border -->
            <div class="card card-npm mb-2">
                <div class="card-body">
                    <h5 class="card-title">NPM: {{ $user->npm }}</h5>
                </div>
            </div>

            <!-- Jurusan Card -->
            <div class="card card-jurusan mb-2">
                <div class="card-body">
                    <h5 class="card-title">Jurusan: {{ $user->jurusan->nama_jurusan ?? 'Jurusan Tidak Ditemukan' }}</h5>
                </div>
            </div>

            <!-- Fakultas Card -->
            <div class="card card-fakultas mb-2">
                <div class="card-body">
                    <h5 class="card-title">Fakultas: {{ $user->jurusan->fakultas->nama_fakultas ?? 'Fakultas Tidak Ditemukan' }}</h5>
                </div>
            </div>

            <!-- Buttons for Edit and Back -->
            <div class="mt-3">
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-purple text-white">Edit</a>
                <a href="{{ route('user.list') }}" class="btn btn-outline-secondary">Back</a>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    .card-nama {
        border: 2px solid #ff0000; /* Red border */
    }
    .card-kelas {
        border: 2px solid #800080; /* Purple border */
    }
    .card-npm {
        border: 2px solid #007bff; /* Blue border */
    }
    .card-jurusan {
        border: 2px solid #ffa500; /* Orange border for Jurusan */
    }
    .card-fakultas {
        border: 2px solid #008000; /* Green border for Fakultas */
    }
    .btn-purple {
        background-color: #800080; /* Purple button */
        border-color: #800080;
    }
    .btn-purple:hover {
        background-color: #4b0082;
        border-color: #4b0082;
    }
</style>
@endsection
