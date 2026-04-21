<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $data = [];
    for ($i = 1; $i <= 15; $i++) {
        $data[] = [
            'stok_id' => $i,
            'barang_id' => $i,
            'user_id' => 1, // Anggap saja user admin (id 1) yang input stok
            'stok_tanggal' => now(),
            'stok_jumlah' => rand(20, 100), // Jumlah stok acak antara 20-100
        ];
    }
    DB::table('t_stok')->insert($data);
}
}
