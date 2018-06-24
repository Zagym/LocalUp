<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * App\City
 *
 * @property int $id
 * @property string $label
 * @property int $active
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Local[] $locals
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
