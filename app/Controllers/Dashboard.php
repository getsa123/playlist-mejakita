<?php
 

namespace App\Controllers;

use \App\Models\DashboardModel;
use \App\Models\ContentModel;

class Dashboard extends BaseController
{
    public function index()
    {
        //Read Mode
        $playlist = new DashboardModel();
        $data['playlist_data'] = $playlist->findAll();
        
        //Create Mode

         // lakukan validasi
         $validation =  \Config\Services::validation();
         $validation->setRules([
             'playlist_title' => 'required',
            //  'pic' => 'is_image[pic]|mime_in[pic,image/jpg,image/jpeg,image/png]'
        ]);
         $isDataValid = $validation->withRequest($this->request)->run();
 
         // jika data valid, simpan ke database
         if($isDataValid){
            $playlist = new DashboardModel();
            // $fileContent = $this->request->getFile('pic');
            // $fileContent->move('playlist_cover');
            // $fileName = $fileContent->getName();
            $playlist->insert([
                 "playlist_title" => $this->request->getPost('playlist_title'),
                 "playlist_category" => $this->request->getPost('playlist_category'),
                 "playlist_description" => $this->request->getPost('playlist_description'),
                //  "playlist_content" =>$fileName
             ]);
             return redirect()->to(base_url('public/'));
         }

        echo view('Dashboard/index', $data);
    }
    
    public function create_content()
    {
        session();
        $content = new ContentModel();
        $data['content_data'] = $content->findAll();
        echo view('Dashboard/create-topic', $data);
    }

    public function save_content() {
        if (!$this->validate([
            'content_title' => [
                'rules' => 'required|is_unique[content.content_title]',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah ada.'
                ]
            ],
            'content_file' => 'mime_in[content_file,application/pdf]|ext_in[content_file,pdf]'
        ])) {
            $validation =  \Config\Services::validation();
            return redirect()->to(base_url('public/dashboard/create_content'))->withInput();
        }
        $content = new ContentModel();
        function getRandomString() {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $string = '';
        
            for ($i = 0; $i < 10; $i++) {
                $string .= $characters[mt_rand(0, strlen($characters) - 1)];
            }
        
            return $string;
        }
        if($this->request->getPost('content_link') != null) 
        {
            $content->insert([
                "content_title" => $this->request->getPost('content_title'),
                "content_category" => $this->request->getPost('content_category'),
                "content_link" => $this->request->getPost('content_link'),
                // "slug" => $slug
            ]);
        }
        else
        {
            $fileContent = $this->request->getFile('content_file');
            $fileName = getRandomString().".pdf";
            $fileContent->move('pdf',$fileName);
            $content->insert([
                "content_title" => $this->request->getPost('content_title'),
                "content_category" => $this->request->getPost('content_category'),
                "content_link" => $fileName,
                // "slug" => $slug
            ]);
        }
        return redirect()->to(base_url('public/dashboard/create_content'));
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

    public function playlist_edit($playlist_id)
    {
        $playlist = new DashboardModel();
        $data['playlist_data'] = $playlist->first();

        // Update Mode

         // ambil artikel yang akan diedit
         $playlist = new DashboardModel();
         $data['playlist_data'] = $playlist-> where('playlist_id', $playlist_id)->first();
         
         // lakukan validasi data artikel
         $validation =  \Config\Services::validation();
         $validation->setRules([
             'playlist_id' => 'required',
             'playlist_title' => 'required'
         ]);
         $isDataValid = $validation->withRequest($this->request)->run();
         // jika data vlid, maka simpan ke database
         if($isDataValid){
             $playlist->update($playlist_id, [
                 "playlist_title" => $this->request->getPost('playlist_title'),
                 "playlist_content" => $this->request->getPost('playlist_content'),
                 "playlist_status" => $this->request->getPost('playlist_status')
             ]);
             return redirect()->to(base_url('public/'));
         }

         $content = new ContentModel();
        $data['content_data'] = $content->findAll();
        
        echo view('Dashboard/isi-playlist', $data);
    }

    public function playlist_delete($playlist_id){
        $playlist = new DashboardModel();
        $playlist->delete($playlist_id);
        return redirect()->to(base_url('public/'));
    }
}