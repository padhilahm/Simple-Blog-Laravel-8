<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class UserController extends Controller
{
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Author Posts',
    //         'posts' => 'tes'
    //     ];
    //     return view('posts', $data);
    // }

    public function show(User $author)
    {
        $data = array(
            'title' => "Post by Author : ".$author->name,
            'active' => 'user',
            'posts' => $author->posts->load('category', 'author') 
        );
        return view('posts', $data);
    }
}
