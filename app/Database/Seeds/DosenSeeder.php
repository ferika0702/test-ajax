<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DosenSeeder extends Seeder
{
    public function run()
    {
        $data=[
            [
                'nama_dosen' => 'Agung Hapsah',
                'nip'      => 1346718081,
                'email'    => 'agung@gmail.com',
                'no_telepon' => '081907684932',
            ],
            [
                'nama_dosen' => 'Miyako Kiri',
                'nip'      => 1234647080,
                'email'    => 'miyakokiri@gmail.com',
                'no_telepon' => '13356789092',
            ],
        ];
        $this->db->table('dosen')->insertBatch($data);
    }
}
