<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends \Backpack\NewsCRUD\app\Models\Category
{
    protected $fillable = ['name', 'slug', 'parent_id','image','image_right'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
