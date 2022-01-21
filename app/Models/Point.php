<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Point
 *
 * @property int $id
 * @property int $order_id
 * @property string $name
 * @property string $address
 * @property string $status
 * @property string $date
 * @property string|null $from
 * @property string|null $to
 * @property int $from_lat
 * @property int $from_long
 * @property int $to_lat
 * @property int $to_long
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Point newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Point newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Point query()
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereFromLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereFromLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereToLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereToLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Point extends Model
{
    use HasFactory;
}
