<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createposttable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'post_id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'posted_by_id' => [
				'type' => 'INT'
			],
			'title' => [
				'type' => 'VARCHAR',
				'constraint' => '225'
			],
			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => '225'
			],
			'content' => [
				'type' => 'TEXT',
			],
			'tag' => [
				'type' => 'VARCHAR',
				'constraint' => '225'
			],
			'cover_image' => [
				'type' => 'VARCHAR',
				'constraint' => '225'
			],
			'created_at' => [
				'type' => 'datetime', 
				'null' => true,
			],
			'updated_at' => [
				'type' => 'datetime', 
				'null' => true,
			],
			'deleted_at' => [
				'type' => 'datetime', 
				'null' => true,
			],
		]);
		$this->forge->addKey('post_id', true);
		$this->forge->createTable('posts');
	}

	public function down()
	{
		$this->forge->dropTable('posts');
	}
}
