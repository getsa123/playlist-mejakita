<?php
 

namespace App\Controllers;

use \App\Models\DashboardModel;
use \App\Models\ContentModel;

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
    
    public function create_content()
    {
        $content = new ContentModel();
        $data['content_data'] = $content->findAll();

        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['content_title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $content = new ContentModel();
            $content->insert([
                "content_title" => $this->request->getPost('content_title'),
                "content_category" => $this->request->getPost('content_category'),
                "content_link" => $this->request->getPost('content_link'),
            ]);
            return redirect()->to(base_url('public/dashboard/create_content'));
        }

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