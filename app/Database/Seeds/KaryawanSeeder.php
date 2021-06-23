<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KaryawanSeeder extends Seeder
{
  public function run()
  {
    $data = [
      [
        'nama_karyawan' => 'darth',
        'nip'    => '123'
      ],
      [
        'nama_karyawan' => 'sulaiman',
        'nip'    => '321'
      ],
      [
        'nama_karyawan' => 'hendra',
        'nip'    => '523'
      ]
    ];

    // Simple Queries
    // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

    // Using Query Builder
    $this->db->table('karyawan')->insertBatch($data);
  }
}
