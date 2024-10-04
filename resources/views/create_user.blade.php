
@extends('layouts.app')

@section('content')

    <div class="profile-container">
        <!-- Avatar profile yang menggunakan gambar dari public/assets/profile.png -->
        <div class="profile-avatar" style="background-image: url('{{ asset('pp.jpg') }}');"></div>
        <h2>Profile Form</h2>
        <form action="{{ route('user.store') }}" method="post" novalidate>
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">First Name:</label>
                <input type="text" id="nama" name="nama" class="form-control">
                @foreach ($errors->get('nama') as $msg)
                        <p class="error">{{ $msg }}</p> <!-- Menggunakan kelas error -->
                 @endforeach
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM:</label>
                <input type="text" id="npm" name="npm" class="form-control">
                @foreach ($errors->get('npm') as $msg)
                        <p class="error">{{ $msg }}</p> <!-- Menggunakan kelas error -->
                 @endforeach
            </div>
            <div class="mb-3">
                <label for="id_kelas"class="form-label">Kelas:</label>
                <select name="kelas_id" id="kelas_id"required>
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
            </select>
            @foreach ($errors->get('kelas_id') as $msg)
                    <p class="error">{{ $msg }}</p> <!-- Menggunakan kelas error -->
             @endforeach
            </div>
            <button type="submit" class="btn btn-custom">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    @endsection
