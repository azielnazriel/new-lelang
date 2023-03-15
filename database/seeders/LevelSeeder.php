<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'nama_15480' => 'administrator'
        ]);

        Level::create([
            'nama_15480' => 'petugas'
        ]);

        //     Petugas::create([
        //         'nama_petugas_15480' => 'dewa',
        //         'username_15480' => 'dewagaming',
        //         'password_15480' => Hash::make('123456'),
        //         'id_level_15480' => '1'
        //     ]);

        //     DB::table('masyarakats_15480')->insert([
        //         'nama_lengkap_15480' => 'putu',
        //         'username_15480' => 'putuw',
        //         'password_15480' => Hash::make('123456'),
        //         'telp_15480' => '081227350318'
        //     ]);
    }
}
