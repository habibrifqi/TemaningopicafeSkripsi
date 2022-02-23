<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('menu')->insert([
        //     'nama_menu' => 'nasi goreng',
        //     'harga' => 15000,
        // ]);
        menu::create([
            'nama_menu' => 'nasi goreng',
            'harga' => 15000,
        ]);
    }
}
