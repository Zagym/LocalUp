<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "towns";

    public function locals()
    {
        return $this->hasMany(Local::class, 'city_id');
    }
}
