<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SlideRepository as SlideRepo;

class HomeController extends Controller
{
    protected $slideRepo;
    public function __construct(SlideRepo $slideRepo)
    {
        $this->slideRepo = $slideRepo;
    }

    public function index()
    {
        $slides = $this->slideRepo->getByStatus(true);
        return view('home',[
            'slides' => $slides
        ]);
    }
}
