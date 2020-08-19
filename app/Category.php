<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function products(){
        return $this->hasMany(Product::class, 'id_category');
    }
    public function company()
    {
        return $this->belongsTo(Company::class,'id_company');
    }
}
