<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Booking
 *
 * @property int $id
 * @property string $begins_at
 * @property string $ends_at
 * @property int $local_id
 * @property int $user_id
 * @property int $flat_rate_id
 * @property float $price
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereBeginsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereFlatRateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereLocalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereUserId($value)
 * @mixin \Eloquent
 */
class Booking extends Model
{
    protected $table = 'bookings';
}
