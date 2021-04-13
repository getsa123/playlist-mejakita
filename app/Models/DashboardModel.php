<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table      = 'playlist';
    protected $primaryKey = 'playlist_id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['playlist_title', 'playlist_description', 'playlist_category', 'playlist_author', 'playlist_content', 'playlist_images' ];
}