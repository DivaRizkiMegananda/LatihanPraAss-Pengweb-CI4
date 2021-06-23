<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penghuni extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_penghuni'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_penghuni'       => [
				'type' => 'varchar',
				'constraint'     => '255',
			],
			'unit' => [
				'type' => 'varchar',
				'constraint'     => '255',
			],
			'no_ktp' => [
				'type' => 'varchar',
				'constraint'     => '255',
			],
			'foto'       => [
				'type' => 'varchar',
				'constraint'     => '255',
			]
		]);
		$this->forge->addKey('id_penghuni', true);
		$this->forge->createTable('penghuni');
	}

	public function down()
	{
		$this->forge->dropTable('penghuni');
	}
}
