<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim'               => '0110221051',
                'nama'              => 'Muhammad Azka Rizqi',
                'jenis_kelamin'     => 'Laki-Laki',
                'tgl_lahir'         => '2002-06-03',
                'tempat_lahir'      => 'Jakarta',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.97',
                'created_at'        => Time::now()
            ],
            [
                'nim'               => '0110221000',
                'nama'              => 'Azka',
                'jenis_kelamin'     => 'Laki-Laki',
                'tgl_lahir'         => '2022-03-01',
                'tempat_lahir'      => 'Gatau',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '4.0',
                'created_at'        => Time::now()
            ],
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
