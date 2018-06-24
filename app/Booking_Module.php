<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Booking_Module
 *
 * @property int $id
 * @property int $bookings_id
 * @property int $modules_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking_Module whereBookingsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking_Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking_Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking_Module whereModulesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking_Module whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Booking_Module extends Model
{
    protected $table = 'bookings_modules';
}
