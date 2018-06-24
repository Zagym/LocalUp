<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Duration_Type
 *
 * @property int $id
 * @property string $label
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration_Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration_Type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration_Type whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Duration_Type whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Duration_Type extends Model
{
    protected $table = 'duration_types';
}
