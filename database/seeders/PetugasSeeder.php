<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
            'nama_petugas_15480' => "Admin",
            'username_15480' => "admin1",
            'password_15480' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'id_level_15480' => 1,
        ]);

        Petugas::create([
            'nama_petugas_15480' => "Petugas",
            'username_15480' => "petugas1",
            'password_15480' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'id_level_15480' => 2,
        ]);
    }
}
