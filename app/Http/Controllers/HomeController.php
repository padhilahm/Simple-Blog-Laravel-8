<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Home',
            'active' => 'home',
        );
        return view('home', $data);
    }
}
