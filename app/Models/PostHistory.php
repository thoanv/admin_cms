<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostHistory extends Model
{
    use HasFactory;
    const STATUS_DRAFT = 'draft';
    const STATUS_UNPUBLISHED = 'unpublished';
    const STATUS_PUBLISHED = 'published';
    protected $fillable = [
        'published',
        'created_by',
        'post_id',
        'note'
    ];
}
