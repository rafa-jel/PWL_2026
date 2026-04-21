<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $data = [];
    $detail_id = 1;
    
    // Loop 10 transaksi penjualan
    for ($i = 1; $i <= 10; $i++) { 
        // Loop 3 barang untuk setiap transaksi
        for ($j = 1; $j <= 3; $j++) { 
            $data[] = [
                'detail_id' => $detail_id++,
                'penjualan_id' => $i,
                'barang_id' => rand(1, 15), // Pilih barang acak (1-15)
                'harga' => 15000, 
                'jumlah' => rand(1, 5), // Pembeli beli 1-5 qty
            ];
        }
    }
    DB::table('t_penjualan_detail')->insert($data);
}
}
