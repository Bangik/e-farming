<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        // \App\Models\Lahan::factory(10)->create();
        \App\Models\alat_bahan::factory(10)->create();
        // \App\Models\LaporanPanen::factory(10)->create();
    }
}
