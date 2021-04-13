<?php
 
namespace App\Controllers;
 
class Dashboard extends BaseController
{
    public function index()
    {
        $data['playlist_data'] = [
			[
				'title' => 'Matematika Unik',
				'author' => 'MDI 009',
                'image' => 'assets/img/gb3.png'
			],
			[
				'title' => 'Fisika Kreatif',
				'author' => 'MDI 009',
                'image' => 'assets/img/gb3.png'
			],
            [
				'title' => 'Kelompok 5',
				'author' => 'MDI 009',
                'image' => 'assets/img/gb3.png'
			],
			[
				'title' => 'Biologi Menyenangkan',
				'author' => 'MDI 009',
                'image' => 'assets/img/gb3.png'
			]
		];
        echo view('Dashboard/index', $data);
    }
    public function create_topic()
    {
        echo view('Dashboard/create-topic');
    }
    public function playlist()
    {
        echo view('Dashboard/isi-playlist');
    }
}