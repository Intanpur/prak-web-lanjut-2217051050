<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = ''){
        $data = [
            'nama' => 'Intan Purnama Sari',
            'kelas' => 'A',
            'npm' => "2217051050"
        ];
        return view('profile', $data);
    }
}
