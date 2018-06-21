<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Module extends Model
{
    protected $table = 'modules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label', 'description', 'price', 'type_id',
    ];

    public function moduleType() 
    {
        return $this->belongsTo(Module_Type::class, 'type_id');
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'label' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|max:255',
            'type_id' => 'required|integer|max:255',
        ]);
    }
}
