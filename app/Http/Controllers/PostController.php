<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.list');
    }
    public function detail()
    {
        return view('posts.detail');
    }
}
