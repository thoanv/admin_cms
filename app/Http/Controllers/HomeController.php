<?php

namespace App\Http\Controllers;

use App\Models\AboutU;
use Illuminate\Http\Request;
use App\Repositories\AboutURepository as AboutURepo;

class HomeController extends Controller
{
    protected $boutURepo;
    public function __construct(AboutURepo $aboutURepo)
    {
        $this->aboutURepo = $aboutURepo;

    }
    public function index()
    {
        $aboutUs = $this->aboutURepo->find(1);
        return view('home', [
            'aboutUs' => $aboutUs
        ]);
    }
}
