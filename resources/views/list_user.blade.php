@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center text-white mb-4">{{ $title }}</h2>
    <a href="{{ route('user.create') }}" class="btn btn-success">Add New User</a>
    
    <table class="table table-striped table-bordered mt-3">
        <thead class="bg-primary text-white">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>NPM</th>
                <th>Class</th>
                <th>Jurusan</th>
                <th>Fakultas</th> <!-- Added column for Fakultas -->
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->kelas->nama_kelas ?? 'N/A' }}</td>
                <td>{{ $user->jurusan->nama_jurusan ?? 'N/A' }}</td>
                <td>{{ $user->fakultas->nama_fakultas ?? 'FMIPA' }}</td> <!-- Displaying Fakultas -->
                <td>
                    @if ($user->foto)
                        <img src="{{ asset('upload/img/' . $user->foto) }}" alt="Profile Image" width="50" height="50" style="object-fit: cover; border-radius: 50%;">
                    @else
                        <img src="{{ asset('assets/img/profile.jpg') }}" alt="Default Profile Image" width="50" height="50" style="object-fit: cover; border-radius: 50%;">
                    @endif
                </td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">View</a>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    body {
        background-color: #e6e6fa; /* Light purple background */
    }

    h2 {
        background-color: #4b0082; /* Dark purple */
        padding: 15px;
        border-radius: 5px;
    }

    .container {
        background-color: #ffffff; /* White background for container */
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Gray shadow */
    }

    .table {
        background-color: #ffffff; /* White background for table */
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Gray shadow */
    }

    th {
        background-color: #800080 !important; /* Purple for table header */
        color: #ffffff; /* White text */
    }

    td {
        background-color: #f8f8ff; /* Very light purple for table rows */
    }

    tr:hover {
        background-color: #dcdcdc; /* Light gray hover effect */
    }

    .btn-container {
        text-align: left; /* Buttons aligned to the left */
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

    /* Styles for Edit and Delete buttons */
    .btn-primary {
        background-color: #007bff; /* Blue for Edit button */
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-warning {
        background-color: #ffc107; /* Yellow for Edit button */
        border-color: #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-danger {
        background-color: #dc3545; /* Red for Delete button */
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2131;
    }
</style>

@endsection
