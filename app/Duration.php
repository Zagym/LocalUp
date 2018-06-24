<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Duration
 *
 * @property int $id
 * @property string $label
 * @property int $duration
 * @property int $type_id
 * @property float $reduction
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration whereReduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Duration extends Model
{
    protected $table = 'durations';
}
