<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Repositories\AboutURepository as AboutURepo;
use App\Repositories\SlideRepository as SlideRepo;
use App\Repositories\RoomRepository as RoomRepo;
use App\Repositories\CategoryRepository as CategoryRepo;

class HomeController extends Controller
{
    protected $aboutUs;
    protected $slideRepo;
    protected $roomRepo;
    protected $categoryRepo;
    public function __construct(AboutURepo $aboutUs, SlideRepo $slideRepo, RoomRepo $roomRepo, CategoryRepo $categoryRepo)
    {
        $this->aboutUs = $aboutUs;
        $this->slideRepo = $slideRepo;
        $this->roomRepo = $roomRepo;
        $this->categoryRepo = $categoryRepo;
    }

    public function index()
    {
        $aboutUs = $this->aboutUs->find(1);
        $slides = $this->slideRepo->getByStatus();
        $categories = $this->categoryRepo->getCategoriesByType('room');
        foreach ($categories as $key =>  $category):
            $categories[$key]['rooms'] = $this->roomRepo->getRoomByCategoryId($category['id']);
        endforeach;
        return view('home',[
            'aboutUs' => $aboutUs,
            'slides'  => $slides,
            'categories' => $categories
        ]);
    }
    public function slug($category_slug, $slug = '')
    {
        $category = $this->categoryRepo->getCategoryBySlug($category_slug);
        if(!$category) return abort('404');
        switch ($category['type']) {
            case Category::CATE_POST :
                if($category['parent_id']){

                }
              break;
            case Category::CATE_ROOM :
              
              break;
            case Category::CATE_CONTACT :
              break;
            case Category::CATE_POLICY :
                break;
            case Category::CATE_INTRODUCE :
                break;
            default:
          }
    }
    public function post()
    {
        return view('posts.list');
    }
}
