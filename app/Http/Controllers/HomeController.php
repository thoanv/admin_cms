<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AboutURepository as AboutURepo;
use App\Repositories\SlideRepository as SlideRepo;

class HomeController extends Controller
{
    protected $aboutUs;
    protected $slideRepo;
    public function __construct(AboutURepo $aboutUs, SlideRepo $slideRepo)
    {
        $this->aboutUs = $aboutUs;
        $this->slideRepo = $slideRepo;
    }

    public function index()
    {
        $aboutUs = $this->aboutUs->find(1);
        $slides = $this->slideRepo->getByStatus();
        return view('home',[
            'aboutUs' => $aboutUs,
            'slides'  => $slides
        ]);
    }
}
