<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            [
        'user_id' => 3,
        'pembeli' => 'Andi',
        'penjualan_kode' => 'TRX001',
        'penjualan_tanggal' => now(),
        'created_at' => now(),
    ],
    [
        'user_id' => 3,
        'pembeli' => 'Budi',
        'penjualan_kode' => 'TRX002',
        'penjualan_tanggal' => now(),
        'created_at' => now(),
    ],
    [
        'user_id' => 3,
        'pembeli' => 'Citra',
        'penjualan_kode' => 'TRX003',
        'penjualan_tanggal' => now(),
        'created_at' => now(),
    ],
    [
        'user_id' => 3,
        'pembeli' => 'Dewi',
        'penjualan_kode' => 'TRX004',
        'penjualan_tanggal' => now(),
        'created_at' => now(),
    ],
    [
        'user_id' => 3,
        'pembeli' => 'Eko',
        'penjualan_kode' => 'TRX005',
        'penjualan_tanggal' => now(),
        'created_at' => now(),
    ],
    [
        'user_id' => 3,
        'pembeli' => 'Fajar',
        'penjualan_kode' => 'TRX006',
        'penjualan_tanggal' => now(),
        'created_at' => now(),
    ],
    [
        'user_id' => 3,
        'pembeli' => 'Gina',
        'penjualan_kode' => 'TRX007',
        'penjualan_tanggal' => now(),
        'created_at' => now(),
    ],
    [
        'user_id' => 3,
        'pembeli' => 'Hadi',
        'penjualan_kode' => 'TRX008',
        'penjualan_tanggal' => now(),
        'created_at' => now(),
    ],
    [
        'user_id' => 3,
        'pembeli' => 'Indah',
        'penjualan_kode' => 'TRX009',
        'penjualan_tanggal' => now(),
        'created_at' => now(),
    ],
    [
        'user_id' => 3,
        'pembeli' => 'Joko',
        'penjualan_kode' => 'TRX010',
        'penjualan_tanggal' => now(),
        'created_at' => now(),
    ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
