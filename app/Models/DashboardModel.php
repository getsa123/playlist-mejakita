<?php
namespace App\Models;

use Codeigniter\Model;

class DashboardModel extends Model
{
    public function createPlaylist() {
        $query = $this->db->table('tb_playlist')->insert($data);
        return $query;
    }

    public function getPlaylist() {
        
    }
}

?>