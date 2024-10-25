<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas; // Pastikan ini diimpor dengan benar

class FakultasSeeder extends Seeder
{
    public function run()
    {
        $data = ['FMIPA', 'FISIP', 'HUKUM'];

        foreach ($data as $fakultas) {
            Fakultas::create([
                'nama_fakultas' => $fakultas,
            ]);
        }
    }
}
