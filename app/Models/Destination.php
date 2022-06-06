<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'avatar',
        'description',
        'status',
        'featured',
        'created_by'
    ];
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'created_by', 'id');
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'destination_post');
    }
}
