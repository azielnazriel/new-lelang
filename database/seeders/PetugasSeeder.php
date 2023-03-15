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
            'username_15480' => "admin",
            'password_15480' => '$2y$10$R6Lh1Dx1tdzXencmkVq/xO/DOcHnPp/0seidU0hIn4xVbbseu1hTC',
            'id_level_15480' => 1,
        ]);
    }
}
