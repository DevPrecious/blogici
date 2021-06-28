<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCommentsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'comment_id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'post_id' => [
				'type' => 'INT'
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '225'
			],
			'comment' => [
				'type' => 'TEXT',
			],
		]);

		$this->forge->addKey('comment_id', true);
		$this->forge->createTable('comments');
	}

	public function down()
	{
		$this->forge->dropTable('comments');
	}
}
