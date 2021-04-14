<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class News extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'content_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'content_title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'content_category'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'content_link'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'content_created_time DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('content_id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('content', TRUE);
	}

	//-------------------------------------------------------

	public function down()
	{
		// menghapus tabel news
		$this->forge->dropTable('content');
	}
}