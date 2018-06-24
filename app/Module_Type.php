<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Module_Type
 *
 * @property int $id
 * @property string $nature
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module_Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module_Type whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module_Type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module_Type whereNature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Module_Type whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Module_Type extends Model
{
    protected $table = 'module_types';
}
