<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Post;
use App\Repositories\Support\AbstractRepository;
use Illuminate\Support\Facades\Auth;

class PostRepository extends AbstractRepository
{
    public function model()
    {
        return Post::class;
    }
    public function getDataByOwner($request)
    {
        $user_id = Auth::id();
        $query = $this->model->where('created_by', $user_id);
        if($request->name){
            $query = $query->where('name', 'like', '%' . $request->name . '%');
        }

        return $query->orderBy('id', 'DESC')->paginate();
    }
    public function getData($request)
    {
        $query = $this->model;
        if($request->name){
            $query = $query->where('name', 'like', '%' . $request->name . '%');
        }

        if($request->status == 0 && $request->status !=''){
            $query = $query->where('status', false);
        }
        if($request->status == 1){
            $query = $query->where('status', true);
        }

        return $query->orderBy('id', 'DESC')->paginate();

    }
    public function getPostByStatus($status = false)
    {
        $query = $this->model;
        if($status)
            $query = $query->where('status', true);

        return $query->orderBy('ID', 'DESC')->get();
    }
}
