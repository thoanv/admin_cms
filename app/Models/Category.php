<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'cover',
        'description',
        'parent_id',
        'serial',
        'type',
        'status',
        'noi_bat',
        'created_by'
    ];
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public static function recursive($categories, $parent = 0, $level = 1, &$listCategory)
    {
        if(count($categories) > 0){
            foreach ($categories as $key => $value){
                if($value->parent_id == $parent){
                    $value->level = $level;

                    $listCategory[] = $value;

                    unset($categories[$key]);

                    $parent = $value->id;
                    self::recursive($categories, $parent, $level + 1, $listCategory);
                }
            }
        }
    }
}
