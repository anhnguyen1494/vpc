<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends \Backpack\NewsCRUD\app\Models\Category
{
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
