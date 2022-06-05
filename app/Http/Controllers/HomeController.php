<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\SlideRepository as SlideRepo;
use App\Repositories\DestinationRepository as DestinationRepo;
use App\Repositories\CategoryRepository as CategoryRepo;
use App\Repositories\PostRepository as PostRepo;
use App\Repositories\BannerRepository as BannerRepo;
use App\Repositories\MenuRepository as MenuRepo;
use App\Repositories\AboutURepository as AboutURepo;
use App\Repositories\CommentRepository as CommentRepo;
class HomeController extends Controller
{
    protected $slideRepo;
    protected $destinationRepo;
    protected $categoryRepo;
    protected $postRepo;
    protected $bannerRepo;
    protected $menuRepo;
    protected $aboutURepo;
    protected $commentRepo;

    public function __construct(CommentRepo $commentRepo, AboutURepo $aboutURepo, MenuRepo $menuRepo, SlideRepo $slideRepo, DestinationRepo $destinationRepo, CategoryRepo $categoryRepo, PostRepo $postRepo, BannerRepo $bannerRepo)
    {
        $this->slideRepo = $slideRepo;
        $this->categoryRepo = $categoryRepo;
        $this->postRepo = $postRepo;
        $this->destinationRepo = $destinationRepo;
        $this->bannerRepo = $bannerRepo;
        $this->menuRepo = $menuRepo;
        $this->aboutURepo = $aboutURepo;
        $this->commentRepo = $commentRepo;
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
        $menus = $this->menuRepo->getMenuBykey('menu-header');
        $about = $this->aboutURepo->find(1);
        return view('home',[
            'slides' => $slides,
            'destinations' => $destinations,
            'categories' => $categories,
            'postReadALots' => $postReadALots,
            'banner' => $banner,
            'menus'  => $menus,
            'about'  => $about
        ]);
    }
    public function slug($category_slug, $slug = '')
    {
        $category = $this->categoryRepo->getCategoryBySlug($category_slug);
        $posts = [];
        $post = '';
        $comments = [];
        $relates = [];
        $view = 'posts.list';
        if(!$category) return abort(404);
        $categories = $this->categoryRepo->getCategoriesOtherCateId($category['id']);
        $menus = $this->menuRepo->getMenuBykey('menu-header');
        if(!$slug){
            $banner = $this->bannerRepo->getBannerByKey('banner-list-page');
            $posts = $category->posts()->where([['status', 'YES'],['published', 'published']])->orderBy('id', 'DESC')->paginate(1);
        }else{
            $banner = $this->bannerRepo->getBannerByKey('banner-list-page');
            $post = $this->postRepo->getPostBySlug($slug);
            if(!$post) return abort(404);
            $data['view'] = $post['view']+1;
            $this->postRepo->update($data, $post['id']);
            $view = 'posts.detail';
            $comments = $this->commentRepo->getCommentByPostId($post['id']); 
            $cate_id = $category['id'];
            $relates = Post::whereHas('categories',function($query) use ($cate_id){
                $query->where('id', $cate_id);
           })->where([['status', 'YES'], ['id', '<>', $post['id']],['published', 'published']])->take(8)->get();
        }
        return view($view,[
            'category'  => $category,
            'categories'=> $categories,
            'posts'     => $posts,
            'post'      => $post,
            'banner'    => $banner,
            'menus'     => $menus,
            'comments'  => $comments,
            'relates'   => $relates
        ]);
    }
    public function destination()
    {
        dd('Điểm đến');
    }
}
