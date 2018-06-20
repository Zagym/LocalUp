<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locals';

    public function category()
    {
        return $this->belongsTo(Local_Type::class, 'type_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
