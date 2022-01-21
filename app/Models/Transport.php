<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Transport
 *
 * @property int $id
 * @property int $car_id
 * @property int $user_id
 * @property string $date
 * @property string|null $dimensions
 * @property string|null $number
 * @property string|null $registration
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Transport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereDimensions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereUserId($value)
 * @mixin \Eloquent
 * @property string $car_date
 * @method static \Database\Factories\TransportFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Transport whereCarDate($value)
 */
class Transport extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id', 'user_id', 'car_date', 'dimensions', 'number', 'registration', 'image',
        'created_at', 'updated_at',
    ];
}
