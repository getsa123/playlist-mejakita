<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Content extends Seeder
{
	public function run()
	{
		// membuat data
		$content_data = [
			[
				'content_title' => 'Aljabar 01',
				'content_category' => 'Link Web',
				'content_link' => 'assets/img/image001.png'
			],
			[
				'content_title' => 'Fisika Terapan',
				'content_category' => 'Youtube',
				'content_link' => 'assets/img/image001.png'
			],
			[
				'content_title' => 'Pertumbuhan Hewan',
				'content_category' => 'File PDF',
				'content_link' => 'assets/img/image001.png'
			]
		];

		foreach($content_data as $data){
			// insert semua data ke tabel
			$this->db->table('content')->insert($data);
		}
	}
}
