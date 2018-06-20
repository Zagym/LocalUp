<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class City extends Model
{
    protected $table = "cities";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label', 'active',
    ];

    public function locals()
    {
        return $this->hasMany(Local::class, 'city_id');
    }

    public function validator($data)
    {
        return Validator::make($data, [
            'label' => 'required|string|max:255|unique:cities',
            'active' => 'nullable',
        ]);
    }
}
