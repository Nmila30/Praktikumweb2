<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Dr.Sarah Gadrie',
                'gender' => 'P',
                'tmp_lahir' => 'Makassar',
                'tgl_lahir' => '1990-07-01',
                'kategori' => 'Umum',
                'telepon' => '081242897620',
                'alamat' => 'Makassar',
                'unit_kerja' => '1',
            ],
            [
                'nama' => 'Dr.Lutfi Rizki',
                'gender' => 'L',
                'tmp_lahir' => 'Kendari',
                'tgl_lahir' => '1980-11-11',
                'kategori' => 'Spesialis',
                'telepon' => '082345673287',
                'alamat' => 'Kendari',
                'unit_kerja' => '2',
            ],
            [
                'nama' => 'Dr.Ariyanto Arif',
                'gender' => 'L',
                'tmp_lahir' => 'Pasarwajo',
                'tgl_lahir' => '1985-06-09',
                'kategori' => 'Dokter Gigi',
                'telepon' => '087629316703',
                'alamat' => 'Pasarwajo',
                'unit_kerja' => '3',
            ],
            [
                'nama' => 'Dr.Cita Kristianti',
                'gender' => 'P',
                'tmp_lahir' => 'Ambon',
                'tgl_lahir' => '1987-06-21',
                'kategori' => 'Bidan',
                'telepon' => '087732176520',
                'alamat' => 'Ambon',
                'unit_kerja' => '4',
            ],
            [
                'nama' => 'Dr.Arif Prasetyo',
                'gender' => 'L',
                'tmp_lahir' => 'Jeneponto',
                'tgl_lahir' => '1989-10-01',
                'kategori' => 'Anastesi',
                'telepon' => '082341785439',
                'alamat' => 'Jeneponto',
                'unit_kerja' => '5',
            ],
        ]);
    }
}

