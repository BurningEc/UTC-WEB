<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function merchant()
    {
        return $this->belongsTo(Merchant::class, 'id_merchant');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'id_company');

    }

    public function products()
    {
        return $this->hasMany(Product::class, 'id_company');

    }

    public function convenio()
    {
        return $this->belongsTo(Convenio::class, 'id_convenio');
    }
}
