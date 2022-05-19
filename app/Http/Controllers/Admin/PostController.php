<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Controllers\Controller;
use App\Repositories\PostRepository as PostRepo;
use App\Repositories\CategoryRepository as CategoryRepo;
use App\Repositories\DestinationRepository as DestinationRepo;
use App\Repositories\PostHistoryRepository as PostHistoryRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    protected $view = 'admin.posts';
    protected $postRepo;
    protected $categoryRepo;
    protected $destinationRepo;
    protected $postHistoryRepo;

    public function __construct(PostHistoryRepo $postHistoryRepo, PostRepo $postRepo, CategoryRepo $categoryRepo, DestinationRepo $destinationRepo)
    {
        $this->postRepo = $postRepo;
        $this->categoryRepo = $categoryRepo;
        $this->destinationRepo = $destinationRepo;
        $this->postHistoryRepo = $postHistoryRepo;
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
        return view($this->view.'.index', [
            'posts' => $posts,
            'view' => $this->view,
            'request' => $request
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
        $data['slug'] = Str::slug($request->name);
        if($request->type_submit === 'save&send'){
            $data['published'] = Post::STATUS_PENDING;
            $histories['published'] = Post::STATUS_PENDING;
        }else{
            $data['published'] = Post::STATUS_DRAFT;
            $histories['published'] = Post::STATUS_DRAFT;
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
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
