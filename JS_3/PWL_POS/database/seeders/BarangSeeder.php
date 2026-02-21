<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'SMBK001',
                'barang_nama' => 'Beras',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'SMBK002',
                'barang_nama' => 'Gula',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'ELK001',
                'barang_nama' => 'Lampu',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'ELK002',
                'barang_nama' => 'Baterai',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'SKNCR001',
                'barang_nama' => 'Bedak',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'SKNCR002',
                'barang_nama' => 'Krim',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'SPRT001',
                'barang_nama' => 'Sepatu',
                'harga_beli' => 60000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'SPRT002',
                'barang_nama' => 'Kaos Kaki',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'FOD001',
                'barang_nama' => 'Mie Instan',
                'harga_beli' => 1500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'FOD002',
                'barang_nama' => 'Minuman Ringan',
                'harga_beli' => 1000,
                'harga_jual' => 2000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
