<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'tb_user';
    protected $allowedFields = ['nama_user', 'password_user'];
}