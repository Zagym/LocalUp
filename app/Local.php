<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Local extends Model
{
    protected $table = 'locals';

    public function category()
    {
        return $this->belongsTo(Local_Type::class, 'type_id');
    }
    public function validator(array $data)
    {
        return Validator::make($data, [
            'label' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'floor' => 'required',
            'door' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'type_id' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg,jpeg,gif,svg|max:2048'
            ]);
    }
}
