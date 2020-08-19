<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';

    public function category()
    {
        return $this->belongsTo(Category::class,'id_category');
    }
    public function company()
    {
        return $this->belongsTo(Company::class,'id_company');
    }
}
