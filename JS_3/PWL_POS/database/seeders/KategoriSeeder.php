<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
        [
            'kategori_id' => 1,
            'kategori_kode' => 'SMBK',
            'kategori_nama' => 'Sembako',
        ],
        [
            'kategori_id' => 2,
            'kategori_kode' => 'ELK',
            'kategori_nama' => 'Elektronik',
        ],
        [
            'kategori_id' => 3,
            'kategori_kode' => 'SKNCR',
            'kategori_nama' => 'Skin Care',
        ],
        [
            'kategori_id' => 4,
            'kategori_kode' => 'SPRT',
            'kategori_nama' => 'Sport',
        ],
        [
            'kategori_id' => 5,
            'kategori_kode' => 'FOD',
            'kategori_nama' => 'Food',
        ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
