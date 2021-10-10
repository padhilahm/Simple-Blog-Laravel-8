<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'About',
            'active' => 'about',
            'name' => 'Padhilah',
            'email' => 'padhilahm@gmail.com',
            'image' => 'pp.jpg' 
        );
        return view('about', $data);
    }
}
