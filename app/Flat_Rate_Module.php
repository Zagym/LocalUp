<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Flat_Rate_Module
 *
 * @property int $id
 * @property int $flat_rate_id
 * @property int $module_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Flat_Rate_Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Flat_Rate_Module whereFlatRateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Flat_Rate_Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Flat_Rate_Module whereModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Flat_Rate_Module whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Flat_Rate_Module extends Model
{
    protected $table ="flat_rates_modules";
}
