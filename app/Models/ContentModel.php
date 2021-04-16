<?php

namespace App\Models;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table      = 'content';
    protected $primaryKey = 'content_id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['content_title', 'content_category', 'content_link', 'content_author', 'playlist_id'];
}