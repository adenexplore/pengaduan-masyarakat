<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'm.nanda',
                'username' => 'nanda',
                'password' => bcrypt('nanda'),
                'telp' => '088166252322',
                'level' => 'Admin',
            ],
            [
                'nama' => 'aril',
                'username' => 'aril',
                'password' => bcrypt('aril'),
                'telp' => '0824634626325',
                'level' => 'Petugas',
            ]
        ];
        Petugas::insert($data);
    }
}
