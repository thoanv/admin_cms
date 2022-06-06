<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoryRepository as CategoryRepo;
use App\Repositories\CommentRepository as CommentRepo;

class PostController extends Controller
{
    protected $categoryRepo;
    protected $commentRepo;

    public function __construct(CategoryRepo $categoryRepo, CommentRepo $commentRepo)
    {
        $this->categoryRepo = $categoryRepo;
        $this->commentRepo = $commentRepo;
    }
    public function index()
    {
        return view('posts.list');
    }
    public function detail()
    {
        return view('posts.detail');
    }
    public function ajaxComment(Request $request)
    {
        $data = $request->only('name', 'phone', 'email', 'content', 'post_id');
        $comment = $this->commentRepo->create($data);
        $result['comment'] = $comment;
        if($request['save']){
            unset($data['post_id']);
            unset($data['content']);
            setcookie('name_comment', serialize($data), time() + (30*24*60*60), "/");
            if(isset($_COOKIE['name_comment'])){
                $result['cookie'] = unserialize($_COOKIE['name_comment']);
            }
            $result['cookie'] = $data;
        }

        return $this->sendResponse($result, 'successfully.');
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
}
