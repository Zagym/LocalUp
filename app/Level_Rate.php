<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Level_Rate
 *
 * @property int $id
 * @property float $rates
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level_Rate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level_Rate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level_Rate whereRates($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level_Rate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Level_Rate extends Model
{
    protected $table = 'level_rates';
}
