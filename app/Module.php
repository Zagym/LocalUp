<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';

    public function moduleType() 
    {
        return $this->belongsTo(Module_Type::class, 'type_id');
    }
}
