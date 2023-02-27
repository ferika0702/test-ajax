<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data=[
            [
                'nama_mhs' => 'Ferika Putra',
                'tgl_lahir'=> 2000-02-07,
                'nim'      => 1931710080,
                'email'    => 'ferikaputra07@gmail.com',
                'no_telepon' => 81907684932,
            ],
            [
                'nama_mhs' => 'Miyako',
                'tgl_lahir'=> 2022-12-01,
                'nim'      => 1921345060,
                'email'    => 'miyako@gmail.com',
                'no_telepon' => 3567890922,
            ],
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
