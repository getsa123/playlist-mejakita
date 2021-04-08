<?php
 
namespace App\Controllers;
 
class Dashboard extends BaseController
{
    public function index()
    {
        return view('Dashboard/index');
    }
    public function create_topic()
    {
        return view('Dashboard/create-topic');
    }
}