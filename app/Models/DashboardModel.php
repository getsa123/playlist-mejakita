<?php
namespace App\Models;

use Codeigniter\Model;

class DashboardModel extends Model
{
    // public function createPlaylist() {
    //     $query = $this->db->table('tb_playlist')->insert($data);
    //     return $query;

        protected $table      = 'playlist';
        protected $primaryKey = 'playlist_id';
    
        protected $useAutoIncrement = true;
        protected $allowedFields = ['playlist_title', 'playlist_description', 'playlist_category', 'playlist_author', 'playlist_content', 'playlist_images', 'playlist_created_time'];
    
}

    // public function getPlaylist() {
        
    // }

?>