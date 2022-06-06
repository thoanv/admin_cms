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
    public function slug(Request $request,$category_slug, $slug = '')
    {
        $category = $this->categoryRepo->getCategoryBySlug($category_slug);
        $posts = [];
        $post = '';
        $comments = [];
        $relates = [];
        $cookie = [];
        $view = 'posts.list';
        if(!$category) return abort(404);
        $categories = $this->categoryRepo->getCategoriesOtherCateId($category['id']);
        $menus = $this->menuRepo->getMenuBykey('menu-header');
        if(!$slug){
            $banner = $this->bannerRepo->getBannerByKey('banner-list-page');
            $posts = $category->posts()->where([['status', 'YES'],['published', 'published']])->orderBy('id', 'DESC')->paginate(7);
            if(isset($request['page']) && $request['page']){
                foreach ($posts as $k_pot => $pot){
                    $posts[$k_pot]['categories'] = $pot->categories()->where('status', true)->get();
                    $posts[$k_pot]['url'] = route('slug',['category_slug' => $category['slug'], 'slug' => $pot['slug']]);
                    $posts[$k_pot]['create'] = date('d/m/Y', strtotime($pot['created_at']));
                }
                return $this->sendResponse($posts, 'successfully.');
            }
        }else{
            $banner = $this->bannerRepo->getBannerByKey('banner-list-page');
            $post = $this->postRepo->getPostBySlug($slug);
            if(!$post) return abort(404);
            $data['view'] = $post['view']+1;
            $this->postRepo->update($data, $post['id']);
            $view = 'posts.detail';
            $comments = $this->commentRepo->getCommentByPostId($post['id']);
            if(isset($request['page']) && $request['page']){
                return $this->sendResponse($comments, 'successfully.');
            }
            $cate_id = $category['id'];
            $relates = Post::whereHas('categories',function($query) use ($cate_id){
                $query->where('id', $cate_id);
            })->where([['status', 'YES'], ['id', '<>', $post['id']],['published', 'published']])->take(8)->get();
            if(isset($_COOKIE['name_comment']) && $_COOKIE['name_comment']){
                $cookie = unserialize($_COOKIE['name_comment']);
            }
        }
        return view($view,[
            'category'  => $category,
            'categories'=> $categories,
            'posts'     => $posts,
            'post'      => $post,
            'banner'    => $banner,
            'menus'     => $menus,
            'comments'  => $comments,
            'relates'   => $relates,
            'cookie'    => $cookie
        ]);
    }
    public function destination(Request $request,$destination_slug, $slug = '')
    {
        $destination = $this->destinationRepo->getDestinationBySlug($destination_slug);
        if(!$destination) return abort(404);
        $view = 'destinations.list';
        $posts = [];
        $post = '';
        $comments = [];
        $relates = [];
        $cookie = [];
        $categories = $this->categoryRepo->getCategoriesShowRight();
        $menus = $this->menuRepo->getMenuBykey('menu-header');
        if(!$slug){
            $banner = $this->bannerRepo->getBannerByKey('banner-list-page');
            $posts = $destination->posts()->where([['status', 'YES'],['published', 'published']])->orderBy('id', 'DESC')->paginate(7);
            if(isset($request['page']) && $request['page']){
                foreach ($posts as $k_pot => $pot){
                    $posts[$k_pot]['categories'] = $pot->categories()->where('status', true)->get();
                    $posts[$k_pot]['url'] = route('destination',['destination_slug' => $destination['slug'], 'slug' => $pot['slug']]);
                    $posts[$k_pot]['create'] = date('d/m/Y', strtotime($pot['created_at']));
                }
                return $this->sendResponse($posts, 'successfully.');
            }
        }else{
            $banner = $this->bannerRepo->getBannerByKey('banner-list-page');
            $post = $this->postRepo->getPostBySlug($slug);
            if(!$post) return abort(404);
            $data['view'] = $post['view']+1;
            $this->postRepo->update($data, $post['id']);
            $view = 'destinations.detail';
            $comments = $this->commentRepo->getCommentByPostId($post['id']);
            if(isset($request['page']) && $request['page']){
                return $this->sendResponse($comments, 'successfully.');
            }
            $destination_id = $destination['id'];
            $relates = Post::whereHas('destinations',function($query) use ($destination_id){
                $query->where('id', $destination_id);
            })->where([['status', 'YES'], ['id', '<>', $post['id']],['published', 'published']])->take(8)->get();
            if(isset($_COOKIE['name_comment']) && $_COOKIE['name_comment']){
                $cookie = unserialize($_COOKIE['name_comment']);
            }
        }
        return view($view,[
            'destination'   => $destination,
            'categories'    => $categories,
            'posts'         => $posts,
            'post'          => $post,
            'banner'        => $banner,
            'menus'         => $menus,
            'comments'      => $comments,
            'relates'       => $relates,
            'cookie'        => $cookie
        ]);
    }
    public function sendResponse($result, $message=null)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];

        return response()->json($response, 200);
    }
    public function search(Request $request){
        $key = $request['key'];
        $posts = $this->postRepo->searchPosts($key);
        $categories = $this->categoryRepo->getCategoriesShowRight();
        $menus = $this->menuRepo->getMenuBykey('menu-header');
        $banner = $this->bannerRepo->getBannerByKey('banner-list-page');
        return view('search',[
            'categories'    => $categories,
            'posts'         => $posts,
            'banner'        => $banner,
            'menus'         => $menus,
            'key'           => $key
        ]);
    }
}
