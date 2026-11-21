<?php

namespace Database\Seeders;

use App\Models\Penghuni;
use Illuminate\Database\Seeder;

class PenghuniSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Budi Santoso',    'ktp' => '3273010101990001', 'pekerjaan' => 'Mahasiswa',        'kontak' => '081234567801'],
            ['nama' => 'Siti Aminah',     'ktp' => '3273014502980002', 'pekerjaan' => 'Karyawan Swasta',  'kontak' => '081234567802'],
            ['nama' => 'Andi Wijaya',     'ktp' => '3273011203970003', 'pekerjaan' => 'Programmer',       'kontak' => '081234567803'],
            ['nama' => 'Dewi Lestari',    'ktp' => '3273015507000004', 'pekerjaan' => 'Mahasiswa',        'kontak' => '081234567804'],
            ['nama' => 'Rizky Pratama',   'ktp' => '3273010808960005', 'pekerjaan' => 'Desainer Grafis',  'kontak' => '081234567805'],
            ['nama' => 'Nur Hidayah',     'ktp' => '3273016009990006', 'pekerjaan' => 'Perawat',          'kontak' => '081234567806'],
            ['nama' => 'Fajar Nugraha',   'ktp' => '3273012011980007', 'pekerjaan' => 'Wiraswasta',       'kontak' => '081234567807'],
            ['nama' => 'Intan Permata',   'ktp' => '3273014412010008', 'pekerjaan' => 'Mahasiswa',        'kontak' => '081234567808'],
        ];

        foreach ($data as $row) {
            Penghuni::updateOrCreate(['ktp' => $row['ktp']], $row);
        }
    }
}