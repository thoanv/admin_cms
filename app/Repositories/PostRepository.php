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
    public function getData($request)
    {
        $query = $this->model;
        if($request->name){
            $query = $query->where('name', 'like', '%' . $request->name . '%');
        }
        if($request->category){
            $query = $query->where('category_id',  $request->category);
        }
        if($request->status){
            $query = $query->where('status', $request->status);
        }

        return $query->orderBy('id', 'DESC')->paginate();

    }

}
