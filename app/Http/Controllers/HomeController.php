<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AboutURepository as AboutURepo;

class HomeController extends Controller
{
    protected $aboutUs;
    public function __construct(AboutURepo $aboutUs)
    {
        $this->aboutUs = $aboutUs;
    }

    public function index()
    {
        $aboutUs = $this->aboutUs->find(1);
        return view('home',[
            'aboutUs' => $aboutUs
        ]);
    }
}
