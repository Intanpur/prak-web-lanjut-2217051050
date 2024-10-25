@extends('layouts.app')

@section('content')
<div class="bg-cover bg-center backdrop-blur-md h-screen" style="background-image: url('{{ asset('assets/img/bg-city.jpg') }}');">
    <div class="flex items-center justify-center h-full">
        <div class="bg-white text-black rounded-lg shadow-md p-4 w-full sm:w-4/5 md:w-3/5 lg:w-1/3">
            <!-- Title and Back Button -->
            <div class="text-center mb-4">
                <h1 class="text-purple text-lg font-bold">Input Data</h1>
            </div>

            <div class="text-left mb-2">
                <a href="{{ route('user.list') }}" class="btn-list-user">List User</a>
            </div>

            <form id="createUser" action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3 konten-2">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama)}}" class="form-control text-sm py-1 px-2">
                    @foreach($errors->get('nama') as $msg)
                        <p class="text-red-500 text-xs">{{ $msg }}</p>
                    @endforeach
                </div>

                <div class="mb-3 konten-2">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" id="npm" name="npm" value="{{ old('npm', $user->npm)}}" class="form-control text-sm py-1 px-2">
                    @foreach($errors->get('npm') as $msg)
                        <p class="text-red-500 text-xs">{{ $msg }}</p>
                    @endforeach
                </div>

                <div class="mb-3 konten-2">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select text-sm py-1 px-2">
                        @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 konten-2">
                    <label for="jurusan_id" class="form-label">Jurusan</label>
                    <select name="jurusan_id" id="jurusan_id" class="form-select text-sm py-1 px-2">
                        @foreach ($jurusan as $jurusanItem)
                        <option value="{{ $jurusanItem->id }}" {{ $jurusanItem->id == $user->jurusan_id ? 'selected' : '' }}>
                            {{ $jurusanItem->nama_jurusan }}
                        </option>
                        @endforeach
                    </select> 
                </div>

                <div class="mb-3 konten-2">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" id="foto" name="foto" class="form-control text-sm py-1 px-2">
                    @if($user->foto)
                    <img src="{{ asset('upload/img/' . $user->foto) }}" alt="User Photo" class="profile-img mt-2">
                    @endif
                </div>

                <div class="text-center py-2">
                    <button type="button" onclick="window.location.href='{{ route('user.list') }}'" class="btn-kembali">Back</button>
                    <button type="submit" form="createUser" class="btn-submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CSS Styling -->
<style>
    body {
        background-color: #e6e6fa; /* Light purple background */
    }

    .bg-white {
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Softer shadow */
        padding: 15px;
    }

    h1.text-purple {
        color: #800080; /* Purple for title */
        margin-bottom: 15px; /* Reduced bottom margin for title */
    }

    .btn-list-user {
        background-color: #800080; /* Purple background for button */
        color: white;
        padding: 5px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 0.875rem; /* Smaller font size */
    }

    .btn-list-user:hover {
        background-color: #4b0082; /* Dark purple on hover */
    }

    .konten-2 {
        margin-bottom: 12px; /* Smaller spacing between elements */
    }

    .form-label {
        font-weight: bold; /* Bold labels */
        color: #800080; /* Purple label */
        font-size: 0.875rem; /* Smaller font size */
    }

    .form-control, .form-select {
        border: 1px solid #800080; /* Purple border for inputs and select */
        font-size: 0.875rem; /* Smaller font size */
        padding: 5px 8px; /* Smaller padding for inputs */
    }

    .btn-submit, .btn-kembali {
        background-color: #800080; /* Purple background for buttons */
        color: white;
        padding: 8px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        font-size: 0.875rem; /* Smaller font size */
    }

    .btn-submit:hover, .btn-kembali:hover {
        background-color: #4b0082; /* Dark purple on hover */
    }

    .profile-img {
        width: 80px;
        height: 80px;
        border-radius: 50%; /* Circular image */
        object-fit: cover; /* Keep aspect ratio */
    }
</style>
@endsection
