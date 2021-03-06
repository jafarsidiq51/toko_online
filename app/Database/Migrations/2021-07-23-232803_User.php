<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'username'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'password' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'salt' => [
				'type' => 'TEXT',
			],
			'avatar' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'role' => [
				'type' => 'INT',
				'constraint' => 1,
				'default' => 1,
			],
			'created_by' => [
				'type' => 'INT',
				'constraint' => 11,

			],
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_by' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => true,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
