<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';

    public function category()
    {
        return $this->belongsTo(Category::class,'id_category');
    }

    public function products()
    {
        return $this->hasMany(Product::class,'id_sub_category');
    }
}
