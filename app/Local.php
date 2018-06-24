<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * App\Local
 *
 * @property int $id
 * @property string $label
 * @property string $description
 * @property string $address
 * @property string $zip
 * @property int $city_id
 * @property int $floor
 * @property int $door
 * @property int $capacity
 * @property float $price
 * @property int $type_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $image_url
 * @property-read \App\Local_Type $category
 * @property-read \App\City $city
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local whereZip($value)
 * @mixin \Eloquent
 */
class Local extends Model
{
    protected $table = 'locals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label', 'description', 'address', 'city_id', 'floor', 'door', 'capacity', 'price', 'type_id', 'image_url', 'zip',
    ];

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
            'city_id' => 'required|integer|max:255',
            'floor' => 'required',
            'door' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'type_id' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg,jpeg,gif,svg|max:2048',
            'zip' => 'required|digits:5',
        ]);
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
