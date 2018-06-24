<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Reduction
 *
 * @property int $id
 * @property float $rates
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reduction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reduction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reduction whereRates($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reduction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Reduction extends Model
{
    protected $table = 'reductions';
}
