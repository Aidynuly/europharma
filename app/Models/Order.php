<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Order
 *
 * @property int $id
 * @property string $description
 * @property string $from
 * @property string $to
 * @property int $from_lat
 * @property int $from_long
 * @property int $to_lat
 * @property int $to_long
 * @property string $status
 * @property int $employee_id
 * @property string $start_date
 * @property string $end_date
 * @property string $payment
 * @property int $price
 * @property int $from_city_id
 * @property int $to_city_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\OrderFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereFromCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereFromLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereFromLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereToCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereToLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereToLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    use HasFactory;

    const STATUS_SEND = 'send';
    const STATUS_PROCESS = 'in_process';
    const STATUS_ACCEPT = 'accepted';
    const STATUS_DECLINED = 'declined';

    protected $fillable = [
        'description',
        'from',
        'to',
        'from_lat',
        'from_long',
        'to_lat',
        'to_long',
        'status',
        'employee_id',
        'start_date',
        'end_date',
        'payment',
        'price',
        'from_city_id',
        'to_city_id',
        'created_at',
        'updated_at',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(OrderImage::class);
    }
}
