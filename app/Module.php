<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * App\Module
 *
 * @property int $id
 * @property string $label
 * @property float $price
 * @property string $description
 * @property int $type_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Module_Type $moduleType
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
