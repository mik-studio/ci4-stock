<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Homepage',
            'page_code' => 'HOME'
        ];
        return view('home/home_index', $data);
    }
}
