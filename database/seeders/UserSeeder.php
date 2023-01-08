<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'status' => 'aktif',
            'telepon' => '081234567890',
            'alamat' => 'Jl. Admin',
            'jenis_kelamin' => 'Laki-laki',
            'role' => 'admin',
        ]);

        User::create([
            'nama' => 'Petani',
            'username' => 'petani',
            'password' => bcrypt('petani'),
            'status' => 'aktif',
            'telepon' => '081234567890',
            'alamat' => 'Jl. Petani',
            'jenis_kelamin' => 'Laki-laki',
            'role' => 'petani',
        ]);
    }
}
