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

        echo view('Dashboard/create-topic', $data);
    }
    public function playlist()
    {
        echo view('Dashboard/isi-playlist');
    }
}