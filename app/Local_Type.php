<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Local_Type
 *
 * @property int $id
 * @property string $label
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local_Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local_Type whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local_Type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local_Type whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Local_Type whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Local_Type extends Model
{
    protected $table = 'local_types';
}
