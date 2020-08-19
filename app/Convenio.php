<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table = 'convenios';

    public function companies()
    {
        return $this->hasMany(Company::class, 'id_convenio');
    }

    public function deliverymen()
    {
        return $this->hasMany(DeliveryMan::class, 'id_convenio');
    }
}
