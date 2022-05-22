<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\PostHistory;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Controllers\Controller;
use App\Repositories\PostRepository as PostRepo;
use App\Repositories\CategoryRepository as CategoryRepo;
use App\Repositories\DestinationRepository as DestinationRepo;
use App\Repositories\PostHistoryRepository as PostHistoryRepo;
use App\Repositories\CategoryPostRepository as CategoryPostRepo;
use App\Repositories\DestinationPostRepository as DestinationPostRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    protected $view = 'admin.posts';
    protected $postRepo;
    protected $categoryRepo;
    protected $destinationRepo;
    protected $postHistoryRepo;
    protected $categoryPostRepo;
    protected $destinationPostRepo;

    public function __construct(DestinationPostRepo $destinationPostRepo, CategoryPostRepo $categoryPostRepo, PostHistoryRepo $postHistoryRepo, PostRepo $postRepo, CategoryRepo $categoryRepo, DestinationRepo $destinationRepo)
    {
        $this->postRepo = $postRepo;
        $this->categoryRepo = $categoryRepo;
        $this->destinationRepo = $destinationRepo;
        $this->postHistoryRepo = $postHistoryRepo;
        $this->destinationPostRepo = $destinationPostRepo;
        $this->categoryPostRepo = $categoryPostRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post, Request $request)
    {
        $this->authorize('viewAny', $post);
        $posts = $this->postRepo->getDataByOwner($request);
        $categories = $this->categoryRepo->getCategoriesStatus(true);
        $destinations = $this->destinationRepo->getDestinationByStatus(true);
        return view($this->view.'.index', [
            'posts' => $posts,
            'view' => $this->view,
            'request' => $request,
            'categories' => $categories,
            'destinations' => $destinations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        $this->authorize('create', $post);
        $categories = $this->categoryRepo->getCategoriesStatus(true);
        $destinations = $this->destinationRepo->getDestinationByStatus(true);
        return view($this->view.'.create', [
            'post' => $post,
            'view' => $this->view,
            'categories' => $categories,
            'destinations' => $destinations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->type_submit === 'save&send'){
            $request->validate([
                'name'  => 'required',
                'avatar'    => 'required',
                'description'    => 'required',
                'content'    => 'required',
                'categories'    => 'required',
                'destinations'    => 'required',
            ]);
        }

        $data = $request->only('name', 'avatar', 'description', 'content');
        $data['created_by'] = Auth::id();
        if($request->type_submit === 'save&send'){
            $data['published'] = Post::STATUS_PENDING;
            $histories['published'] = PostHistory::STATUS_PENDING;
        }else{
            $data['published'] = Post::STATUS_DRAFT;
            $histories['published'] = PostHistory::STATUS_DRAFT;
        }
        $result = $this->postRepo->create($data);
        $result->categories()->attach($request['categories']);
        $result->destinations()->attach($request['destinations']);
        $data = [];
        $data['slug'] = Str::slug($request->name).'-'.$result['id'];
        $histories['post_id'] = $result['id'];
        $histories['created_by'] = Auth::id();
        $this->postHistoryRepo->create($histories);
        $this->postRepo->update($data, $result['id']);
        return redirect(route('posts.index'))->with('success',  'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Request $request)
    {
        $type = $request->type;
        $this->authorize('view', $post);
        if(!$post) return abort(404);
        return view($this->view.'.show', [
            'post' => $post,
            'view' => $this->view,
            'type' => $type
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        $categories = $this->categoryRepo->getCategoriesStatus(true);
        $destinations = $this->destinationRepo->getDestinationByStatus(true);
        $list_cates = $this->categoryPostRepo->getCategoryByPostId($post['id']);
        $list_des = $this->destinationPostRepo->getDestinationByPostId($post['id']);
        return view($this->view.'.update', [
            'post' => $post,
            'view' => $this->view,
            'categories' => $categories,
            'destinations' => $destinations,
            'list_cates' => $list_cates,
            'list_des' => $list_des
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        if($request->type_submit === 'save&send'){
            $request->validate([
                'name'  => 'required',
                'avatar'    => 'required',
                'description'    => 'required',
                'content'    => 'required',
                'categories'    => 'required',
                'destinations'    => 'required',
            ]);
        }

        $data = $request->only('name', 'avatar', 'description', 'content');
        $data['updated_by'] = Auth::id();
        if($request->type_submit === 'save&send'){
            $data['published'] = Post::STATUS_PENDING;
            $histories['published'] = PostHistory::STATUS_PENDING;
        }else{
            $data['published'] = Post::STATUS_DRAFT;
            $histories['published'] = PostHistory::STATUS_DRAFT;
        }
        $data['slug'] = Str::slug($request->name).'-'.$post['id'];
        $this->postRepo->update($data, $post['id']);
        $checkCategoryPost = $this->categoryPostRepo->checkCategoryPostByPostId($post['id']);
        if(count($checkCategoryPost) > 0){
            $post->categories()->sync($request['categories']);
        }else{
            $post->categories()->attach($request['categories']);
        }
        $checkDestinationPost = $this->destinationPostRepo->checkDestinationPostByPostId($post['id']);
        if(count($checkDestinationPost) > 0){
            $post->destinations()->sync($request['destinations']);
        }else{
            $post->destinations()->attach($request['destinations']);
        }
        $histories['post_id'] = $post['id'];
        $histories['created_by'] = Auth::id();
        $this->postHistoryRepo->create($histories);
        return redirect(route('posts.index'))->with('success',  'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        if($post['published'] === Post::STATUS_DRAFT){
            $post->delete();
            return redirect()->route('posts.index')->with('success','Xóa thành công');
        }
        return abort(403);
    }
    /**
     * @return \Illuminate\Http\Response
     */
    public function pending(Post $post, Request $request)
    {
        $this->authorize('restore', $post);
        $posts = $this->postRepo->getPostByPublisher();
        $categories = $this->categoryRepo->getCategoriesStatus(true);
        $destinations = $this->destinationRepo->getDestinationByStatus(true);
        return view($this->view.'.pending', [
            'posts' => $posts,
            'view' => $this->view,
            'request' => $request,
            'categories' => $categories,
            'destinations' => $destinations
        ]);
    }
    /**
     * @return \Illuminate\Http\Response
     */
    public function published(Post $post, Request $request)
    {
        $this->authorize('published', $post);
        $posts = $this->postRepo->getPostByPublisher('published');
        $categories = $this->categoryRepo->getCategoriesStatus(true);
        $destinations = $this->destinationRepo->getDestinationByStatus(true);
        return view($this->view.'.published', [
            'posts' => $posts,
            'view' => $this->view,
            'request' => $request,
            'categories' => $categories,
            'destinations' => $destinations
        ]);
    }
    /**
     * @return \Illuminate\Http\Response
     */
    public function unpublished(Post $post, Request $request)
    {
        $this->authorize('unpublished', $post);
        $posts = $this->postRepo->getPostByPublisher('unpublished');
        $categories = $this->categoryRepo->getCategoriesStatus(true);
        $destinations = $this->destinationRepo->getDestinationByStatus(true);
        return view($this->view.'.unpublished', [
            'posts' => $posts,
            'view' => $this->view,
            'request' => $request,
            'categories' => $categories,
            'destinations' => $destinations
        ]);
    }
    public function changePublished(Request $request)
    {
        $post_id = (int)$request->post_id;
        $published = $request['published'];
        $type = $request['type'] ? $request['type'] : 'index';
        $data = $request->only('note','published');
        $data['created_by'] = Auth::id();
        $data['post_id'] = $post_id;
        $this->postHistoryRepo->create($data);
        $data = [];
        if($published === PostHistory::STATUS_NODISPLAY){
            $data['status'] = 'NO';
        }else{
            $data['published'] = $published;
        }
        $data['view'] = rand(100, 999);
        $post = $this->postRepo->update($data, $post_id);
        return redirect(route('posts.'.$type))->with('success',  'Chuyển trạng thái thành công');
    }
}
