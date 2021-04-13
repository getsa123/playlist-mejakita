<?php
 

namespace App\Controllers;

use \App\Models\DashboardModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $playlist = new DashboardModel();
        $data['playlist_data'] = $playlist->findAll();
        
         // lakukan validasi
         $validation =  \Config\Services::validation();
         $validation->setRules(['playlist_title' => 'required']);
         $isDataValid = $validation->withRequest($this->request)->run();
 
         // jika data valid, simpan ke database
         if($isDataValid){
             $playlist = new DashboardModel();
             $playlist->insert([
                 "playlist_title" => $this->request->getPost('playlist_title'),
                 "playlist_category" => $this->request->getPost('playlist_category'),
                 "playlist_description" => $this->request->getPost('playlist_description'),
             ]);
             return redirect()->to(base_url('public/'));
         }

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

    public function create_playlist()
    {
        $playlist = new DashboardModel();
        $playlist->insert([
            "playlist_title" => $this->request->getPost('title'),
            "playlist_images" => $this->request->getPost('pic'),
            "playlist_categories" => $this->request->getPost('category'),
            "playlist_description" => $this->request->getPost('desc')
        ]);
        $this->load->views('public/Dashboard');
    }

    public function playlist()
    {
        $playlist = new DashboardModel();
        $data['playlist_data'] = $playlist->first();
        
        echo view('Dashboard/isi-playlist', $data);
    }

    public function delete($playlist_id){
        $playlist = new DashboardModel();
        $playlist->delete($playlist_id);
        return redirect()->to(base_url('public/'));
    }
}