<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class News extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'playlist_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'playlist_title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'playlist_description'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'playlist_category'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'playlist_author'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'        => 'MDI 009',
			],
			'playlist_content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'playlist_images'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'playlist_created_time DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('playlist_id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('playlist', TRUE);
	}

	//-------------------------------------------------------

	public function down()
	{
		// menghapus tabel news
		$this->forge->dropTable('playlist');
	}
}