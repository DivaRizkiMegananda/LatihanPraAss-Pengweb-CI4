<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_karyawan'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_karyawan'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'nip' => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
		]);
		$this->forge->addKey('id_karyawan', true);
		$this->forge->createTable('karyawan');
	}

	public function down()
	{
		$this->forge->dropTable('karyawan');
	}
}
