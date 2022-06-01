<?php
namespace App\Repositories;

use App\Models\Room;
use App\Repositories\Support\AbstractRepository;
use Illuminate\Support\Facades\Auth;

class RoomRepository extends AbstractRepository
{
    public function model()
    {
        return Room::class;
    }
    public function getCategoriesStatus($status = false)
    {
        $query = $this->model;
        if($status)
            $query = $query->where('status', true);

        return $query->orderBy('ID', 'DESC')->get();
    }
    public function getLists()
    {
        return $this->model->where('status', true)->get();
    }

}
