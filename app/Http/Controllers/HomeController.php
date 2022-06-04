<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SlideRepository as SlideRepo;
use App\Repositories\DestinationRepository as DestinationRepo;
use App\Repositories\CategoryRepository as CategoryRepo;
use App\Repositories\PostRepository as PostRepo;
use App\Repositories\BannerRepository as BannerRepo;

class HomeController extends Controller
{
    protected $slideRepo;
    protected $destinationRepo;
    protected $categoryRepo;
    protected $postRepo;
    protected $bannerRepo;
    public function __construct(SlideRepo $slideRepo, DestinationRepo $destinationRepo, CategoryRepo $categoryRepo, PostRepo $postRepo, BannerRepo $bannerRepo)
    {
        $this->slideRepo = $slideRepo;
        $this->categoryRepo = $categoryRepo;
        $this->postRepo = $postRepo;
        $this->destinationRepo = $destinationRepo;
        $this->bannerRepo = $bannerRepo;
    }
    public function index()
    {
        $slides = $this->slideRepo->getByStatus(true);
        $destinations =   $this->destinationRepo->getDestinationFeatured();
        $categories = $this->categoryRepo->getCategoriesFeatured();
        foreach ($categories as $key => $cate):
            $categories[$key]['posts'] = $cate->posts()->where([['status', 'YES'], ['featured', 'YES'],['published', 'published']])->take(5)->get();
        endforeach;
        $postReadALots = $this->postRepo->getPostReadALots();
        $banner = $this->bannerRepo->getBannerByKey('banner-home');
        return view('home',[
            'slides' => $slides,
            'destinations' => $destinations,
            'categories' => $categories,
            'postReadALots' => $postReadALots,
            'banner' => $banner
        ]);
    }
    public function slug($category_slug, $slug = '')
    {
        dd($category_slug);
    }
    public function destination()
    {
        dd('Điểm đến');
    }
}
