<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Playlist extends Seeder
{
	public function run()
	{
		// membuat data
		$playlist_data = [
			[
				'playlist_title' => 'Matematika Classic',
				'playlist_description' => 'Playlist Matematika Klasik',
				'playlist_category' => 'Matematika',
				'playlist_author' => 'MDI009',
				'playlist_content' => 'assets/img/image001.png'
			],
			[
				'playlist_title' => 'Fisika SMA',
				'playlist_description' => 'Playlist Fisika SMA',
				'playlist_category' => 'Fisika',
				'playlist_author' => 'MDI009',
				'playlist_content' => 'assets/img/image001.png'
			],
			[
				'playlist_title' => 'Kimia SMP',
				'playlist_description' => 'Playlist Kimia SMP',
				'playlist_category' => 'Kimia',
				'playlist_author' => 'MDI009',
				'playlist_content' => 'assets/img/image001.png'
			]
		];

		foreach($playlist_data as $data){
			// insert semua data ke tabel
			$this->db->table('playlist')->insert($data);
		}
	}
}
