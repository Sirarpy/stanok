<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->hasMany(Category::class, 'id', 'category_id');
    }
}
