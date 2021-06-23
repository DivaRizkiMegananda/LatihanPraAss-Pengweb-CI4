<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paket extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_paket'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'tanggal_datang'       => [
				'type'       => 'DATETIME',
				'null' => true,
			],
			'penerima' => [
				'type' => 'varchar',
				'constraint'     => '255',

			],
			'isi_paket' => [
				'type' => 'varchar',
				'constraint'     => '255',

			],
			'tanggal_ambil'       => [
				'type'       => 'DATETIME',
				'null' => true,
			]
		]);
		$this->forge->addKey('id_paket', true);
		$this->forge->createTable('paket');
	}

	public function down()
	{
		$this->forge->dropTable('paket');
	}
}
