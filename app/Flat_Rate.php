<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Flat_Rate
 *
 * @property int $id
 * @property string $label
 * @property float $price
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Flat_Rate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Flat_Rate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Flat_Rate whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Flat_Rate wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Flat_Rate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Flat_Rate extends Model
{
    protected $table = 'flat_rates';
}
